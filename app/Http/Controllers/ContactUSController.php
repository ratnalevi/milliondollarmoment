<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class ContactUSController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('contact');
    }

    public function store(ContactFormRequest $request){
        \Mail::send('emails.contact',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'mobile' => $request->get('mobile'),
                'user_message' => $request->get('message')
            ), function($message) {
                $message->from('ratnalevi@gmail.com');
                $message->to('ratnalevi@gmail.com', 'Admin')->subject('Million Dollar Moment Contact Request');
            });

        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');


    }
}