<?php

namespace App\Http\Controllers\frontend;

use DB;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('frontend.blog.index')->with('blogs', $blogs);
    }
}