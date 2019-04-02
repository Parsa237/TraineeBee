<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Page controller handles get requests from web.php(routes/app.php)
class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.index');
    }

    public function about(){
        return view('Pages.about');
    }

    public function CandCInfo(){
        return view('Pages.candcinfo');
    }

    public function login(){
        return view('Pages.login');
    }

    public function contact(){
        return view('Pages.contact');
    }

    public function adminpanel(){
        return view('Pages.adminpanel');
    }
}
