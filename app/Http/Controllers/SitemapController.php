<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class SitemapController extends Controller
{
    public function index(Request $r){
        $posts = Post::orderBy('id','desc')->where('post_status','Publish')->get();
        return response()->view('sitemap',compact('posts'))
        ->header('content-Type','text/xml');
    }
}
