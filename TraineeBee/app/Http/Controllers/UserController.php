<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Pages.profile', array('user' => Auth::user()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = User::find($id);
        return view('Pages.profile')->with('user', $profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = User::find($id);
        if(auth()->user()->id !== $profile->id){
            return redirect('/dashboard')->with('error', 'Unauthorized profile edit');
        }
        return view('Profile.edit')->with('profile', $profile);
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


        if($request->hasFile('avatar')) {
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/uploads/avatars', $filenameToStore);
        }else{
            $filenameToStore = 'default.png';
        }

//        var_dump($path);

        $profile = User::find($id);
        $profile->website = $request->input('website');
        $profile->address = $request->input('address');
        $profile->generalinfo = $request->input('generalinfo');
        $profile->internshipinfo = $request->input('internshipinfo');
        $profile->skills = $request->input('skills');
        $profile->avatar = $filenameToStore;
        $profile->save();
        return redirect('/dashboard')->with('success', 'Post Updated');
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
