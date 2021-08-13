<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Alert;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use DB;


class BlogController extends Controller
{
    public $folderName = 'blog/';
    public $storagePath = 'public/uploads/';
    
    public function index()
    {
        $post = Post::orderBy('created_at', 'DESC')->get();
        return view('admin.blog', compact('post'));
    }

    public function create()
    {
        $category = Category::all();
        return view('admin.add-blog', compact('category'));
    }

    public function store(Request $request) 
    {
        $slug = Str::slug($request->title,'-').'-'.rand(10000,99999).'.html';
        $upload = $this->doUpload($request, 'thumnail');
        
        $content = $request->content;
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            @list($type, $data) = explode(';', $data);
            @list(, $data)      = explode(',', $data);
            @$data = base64_decode($data);
            $image_name = 'blog_' . \Carbon\Carbon::now()->format('Ymd_His'). '-' .uniqid() . '.png';
            //$path = public_path().'/uploads/'.$this->folderName. $image_name;
            Storage::put('/public/uploads/'.$this->folderName. $image_name, $data);
            //file_put_contents($path, $data);
            $img->removeAttribute('src');
            //$img->setAttribute('src', $image_name);
            $img->setAttribute('src', asset('storage/uploads/'.$this->folderName.$image_name));
            
        }

        $content = $dom->saveHTML();


        if($upload){
            $doStore = Post::create([
                'user_id' => Auth::id(),
                'category_id' => $request->category,
                'title' => $request->title,
                'thumbnail' => $upload,
                'content' => $content,
                'status' => $request->status,
                'tags' => $request->tag,
                'slug' => $slug,
            ]);

            if($doStore){
                // Alert::success('success', 'Post Created Successfully!');
                return redirect('/web-admin/blog')->withSuccess('success', 'Post Created Successfully!');
            }
            else{
                return back()->withErrors('errors')->withInput();
            }

        }else{
            return back()->withErrors('errors', 'Error Image Upload')->withInput();
           
        }
    }

    public function edit($blog)
    {
        
        $post = Post::findOrfail($blog);
        $url = Storage::path($post->thumbnail);
        // dd($url);
        $category = Category::all();
        return view('admin.edit-blog', compact('post', 'category'));
    }

    public function update(Request $request)
    {
        $slug = Str::slug($request->title,'-').'-'.rand(10000,99999).'.html';
        if ($request->thumbnail) {
            $upload = $this->doUpload($request, 'thumbnail');
        }
        elseif (!$request->thumbnail) {
            $upload = $request->thumbnail_old;
        }

        $post = Post::findOrFail($request->id);

        $contentOLD = $post->content;
        $domOLD = new \DomDocument();
        libxml_use_internal_errors(true);
        $domOLD->loadHtml($contentOLD,LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imagesOLD = $domOLD->getElementsByTagName('img');
        
        $content = $request->content;
        $dom = new \DomDocument();
        libxml_use_internal_errors(true);
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            @list($type, $data) = explode(';', $data);
            @list(, $data)      = explode(',', $data);
            @$data = base64_decode($data);
            if ($data) {
                $image_name = 'blog_' . \Carbon\Carbon::now()->format('Ymd_His'). '-' .uniqid() . '.png';
                //$path = public_path().'/uploads/'.$this->folderName. $image_name;
                Storage::put('/public/uploads/'.$this->folderName. $image_name, $data);
                //file_put_contents($path, $data);
                $img->removeAttribute('src');
                //$img->setAttribute('src', $image_name);
                $img->setAttribute('src', asset('storage/uploads/'.$this->folderName.$image_name));
            } else {
                $data = $img->getAttribute('src');
                $listImages[] = $data;
            }
            
        }

        $content = $dom->saveHTML();

        foreach($imagesOLD as $kOLD => $imgOLD){
            $dataOLD = $imgOLD->getAttribute('src');
            $deleteImages = true;
            foreach($listImages as $lI){
                if($dataOLD == $lI){
                    $deleteImages = false;
                }
            }

            if($deleteImages == true){
                $filepath = str_replace(asset('storage'),'public',$dataOLD);
                $fileDelete = Storage::delete($filepath);
            }
        }


        if($upload){
            $doStore = $post->update([
                'user_id' => Auth::id(),
                'category_id' => $request->category,
                'title' => $request->title,
                'thumbnail' => $upload,
                'content' => $content,
                'status' => $request->status,
                'tags' => $request->tag,
                'slug' => $slug,
            ]);

            if($doStore){
                return redirect('/web-admin/blog')->withSuccess('success', 'Post Updated Successfully!');
            }
            else{
                return back()->withErrors('errors')->withInput();
            }

        }else{
            return back()->withErrors('errors', 'Error Image Upload')->withInput();
           
        }
    }

    public function doUpload(Request $request,$inputName)
    {
        $file = $request->file($inputName);
        $name = 'blog_' . \Carbon\Carbon::now()->format('Ymd_His'). '-' .uniqid() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('public/uploads/'.$this->folderName, $name);        
        if($path){
            return $name;
        }
        else{
            return false;
        }
    }
}
