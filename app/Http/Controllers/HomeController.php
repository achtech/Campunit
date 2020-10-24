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
    public static function getReviewsCount($id){
        return DB::table('camper_reviews')->where('id_campers',$id)->count();
    }
    public static function getCamperRate($id){
        $data =  DB::table('v_rate_camper')->where('id_campers',$id)->first();
        return $data? $data->rate : 0;
    }
    public static function getListings($id){
        $data = DB::table('campers')->where([
            ['id_camper_categories',$id],
            ['is_confirmed',1],
            ['availability',0],
            ])->count();
    }
}
