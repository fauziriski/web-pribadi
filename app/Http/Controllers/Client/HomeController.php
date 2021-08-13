<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

// use Illuminate\Http\Request;
use Request;

use Spatie\Activitylog\Models\Activity;

use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $request) 
    {
        $ip = $this->getIp();
        activity('index')->log($ip);

        $post = Post::where('status', 'publish')->orderBy('created_at', 'DESC')->limit(3)->get();
        return view('user.index', compact('post'));
    }

    public function about() 
    {
        $ip = $this->getIp();
        activity('about')->log($ip);

        return view('user.about');
    }

    public function blog()
    {
        $ip = $this->getIp();
        activity('blog')->log($ip);
        $posts = Post::where('status', 'publish')->orderBy('created_at', 'DESC')->paginate('9');
        return view('user.blog', compact('posts'));
    }

    public function blog_single($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $ip = $this->getIp();
        activity('blog_single-'.$post->id)->log($ip);
        return view('user.blog-single', compact('post'));
    }

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
        return request()->ip();
    }
}
