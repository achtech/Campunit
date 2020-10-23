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

    public function terms()
    {

        $categories = DB::table('camper_categories')->paginate(10);

        return view('helpLinks.terms')->with('categories', $categories);
    }

    public function disclaimer()
    {

        $categories = DB::table('camper_categories')->paginate(10);

        return view('helpLinks.disclaimer')->with('categories', $categories);
    }

    public function imprint()
    {

        $categories = DB::table('camper_categories')->paginate(10);

        return view('helpLinks.imprint')->with('categories', $categories);
    }

    public function help()
    {

        $categories = DB::table('camper_categories')->paginate(10);

        return view('helpLinks.help')->with('categories', $categories);
    }

}
