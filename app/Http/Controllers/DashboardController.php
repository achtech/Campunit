<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CamperCategory;
use Illuminate\Support\Facades\DB;
use App\Models\Camper;

class DashboardController extends Controller
{
    //
    public function index(){
        
        $categories = DB::table('camper_categories')->paginate(10);
        $campers = DB::table('campers')->paginate(10);

        return view('dashboard')->with('categories', $categories)->with('campers', $campers);
    }

    
}
