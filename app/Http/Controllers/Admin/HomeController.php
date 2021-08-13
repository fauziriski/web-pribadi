<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Carbon;

use App\Models\Post;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $activity = Activity::count();
        $date = date("Y-m-d", strtotime(now()));
        $todayActivity = Activity::whereDate('created_at', '=', date('Y-m-d'))->count();
        $post = Post::where('status', 'publish')->count();

        return view('admin.index', compact('post', 'activity', 'todayActivity'));
    }

}
