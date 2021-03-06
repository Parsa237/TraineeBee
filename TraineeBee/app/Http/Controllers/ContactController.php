<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Contact::orderBy('created_at')->paginate(5);
//        var_dump($messages);
        return view('adminpanel.panel')->with('messages', $messages);
    }

    public function create(){
        return view('adminpanel.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump($request);
        $this->validate($request, [
            'email' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->name = $request->input('name');
        $contact->save();

        var_dump($contact);
//        return redirect('/dashboard')->with('success', 'Message send');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $searchContact = Contact::find($contact);

        if($searchContact == NULL){
//          return should be /adminpanel
            return redirect('/')->with('error', "Couldn't find Contact");
        }

        return view('adminpanel.contact')->with('contact', $contact);
    }

    public function update(){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
