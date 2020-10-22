<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $categories = DB::table('camper_categories')->paginate(10);
        $campers = DB::table('campers')->paginate(10);
        return view('home.index')->with('categories', $categories)->with('campers', $campers);
    }

}
