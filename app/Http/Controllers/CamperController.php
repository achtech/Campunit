<?php

namespace App\Http\Controllers;

use DB;

class CamperController extends Controller
{
    //
    public function index()
    {
        $categories = DB::table('camper_categories')->paginate(10);
        //$campers = DB::table('campers')->paginate(10);
        //$review = DB::table('campers')->get();
        return view('camper.index')->with('categories', $categories);
    }

}
