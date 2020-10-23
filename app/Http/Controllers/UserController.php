<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index(){
        $clientId =1;//auth()->user()->id;
        $client = Client::find($clientId);
        $categories = DB::table('camper_categories')->paginate(10);
        return view('clients.user.index')->with('client', $client)->with('categories', $categories);
    }

    
}
