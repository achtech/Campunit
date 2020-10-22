<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    public function index()
    {

        $categories = DB::table('camper_categories')->paginate(10);

        return view('contact.index')->with('categories', $categories);
    }

}
