<?php

namespace App\Http\Controllers;

use DB;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = DB::table('blogs')->get();
        return view('blog.index')->with('blogs', $blogs);
    }
}