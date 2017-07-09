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
                'event_type' => $request->get('event_type'),
                'surprise_type' => $request->get('surprise_type'),
                'event_date' => $request->get('event_date'),
                'guest_count' => $request->get('amount'),
                'reach_factor' => $request->get('reach_factor'),
                'user_message' => $request->get('message')
            ), function($message) {
                $message->from('ratnalevi@gmail.com');
                $message->to('ratnalevi@gmail.com', 'Admin')->subject('Million Dollar Moment Contact Request');
            });

        return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }

    public function faq(){
        return view('faq');
    }

    public function testimonials(){
        return view('testimonials');
    }
}