<?php

namespace App\Http\Controllers;

use DB;

class ListYourCamperController extends Controller
{
    //
    public function index()
    {
        $categories = DB::table('camper_categories')->paginate(10);
        $campers = DB::table('campers')->paginate(10);
        return view('listYourCamper.index')->with('categories', $categories)->with('campers', $campers);
    }

}
