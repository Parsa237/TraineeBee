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
        $user = User::find($id);


        if($request->hasFile('avatar')) {
            $filenameWithExt = $request->file('avatar')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $avatarfilenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('avatar')->storeAs('public/uploads/avatars', $avatarfilenameToStore);
        }else{
            $avatarfilenameToStore = 'default.png';
        }

        if($request->hasFile('headerimage')) {
            $filenameWithExt = $request->file('headerimage')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('headerimage')->getClientOriginalExtension();
            $headerimagenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('headerimage')->storeAs('public/uploads/headerimage', $headerimagenameToStore);
        }else{
            $headerimagenameToStore = 'default.png';
        }


        $profile = User::find($id);
        $profile->website = $request->input('website');
        $profile->address = $request->input('address');
        $profile->generalinfo = $request->input('generalinfo');
        $profile->internshipinfo = $request->input('internshipinfo');
        $profile->skills = $request->input('skills');
        if($request->hasFile('avatar') && $request->file('avatar')->getClientOriginalName() !== 'default.png') {
            $profile->avatar = $avatarfilenameToStore;
        }
        if($request->hasFile('headerimage') && $request->file('headerimage')->getClientOriginalName() !== 'default.png') {
            $profile->headerimage = $headerimagenameToStore;
        }
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
