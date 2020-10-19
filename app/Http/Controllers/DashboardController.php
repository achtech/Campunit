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
        
        $datas = CamperCategory::paginate(10);
        $dataCamper = Camper::paginate(10);

        return view('dashboard')->with('datas', $datas)->with('dataCamper', $dataCamper);
    }

    public static function getLabel($table, $id,$label)
    {
        $data = DB::table($table)->find($id);
        return $data->$label;
    }
}
