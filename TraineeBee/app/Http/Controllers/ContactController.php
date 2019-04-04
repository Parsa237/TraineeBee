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
        return view('Pages.dashboard')->with('messages', $messages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');
        $contact->save();
        return redirect('/dashboard')->with('success', 'Message send');
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
            return redirect('/admingpanel')->with('error', "Couldn't find Contact");
        }

        return view('adminpanel.contact')->with('contact', $contact);
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
