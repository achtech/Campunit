<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public static function getValue($field, $table, $id)
    {
        return DB::table($table)->find($id)->$field;
    }
    public static function getLabelFromObject($data)
    {
        $label= $data->label_en;
        switch(app()->getLocale()){
            case 'fr' : $label= $data->label_en;break;
            case 'de' : $label= $data->label_en;break;
            default : $label= $data->label_en; 
        }
        return  $label;
    }
    
    public static function getLabel($table, $id)
    {
        $data =DB::table($table)->find($id);
        return  self::getLabelFromObject($data);
    }
}
