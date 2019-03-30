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

    public function dashboard(){
        return view('Pages.dashboard')->with([[
				'image' => 'x',
				'name' => 'name',
				'description' => 'description'
			], [
				'image' => 'x2',
				'name' => 'name2',
				'description' => 'description2'
			], [
				'image' => 'x3',
				'name' => 'name3',
				'description' => 'description3'
			]
		]);;
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

    public function profile(){
        return view('Pages.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
