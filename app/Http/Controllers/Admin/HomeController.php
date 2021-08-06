<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use DB;


class HomeController extends Controller
{
    public $folderName = 'blog/';
    public $storagePath = 'public/uploads/';


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function blog()
    {
        return view('admin.blog');
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
                echo 'Berhasil';
            }
            else{
                echo 'Gagal Input DB';
               
            }

        }else{
            'Gagal Upload Foto';
           
        }
    }

    public function doUpload(Request $request,$inputName){
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
