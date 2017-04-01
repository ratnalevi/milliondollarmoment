<?php

namespace App\Http\Controllers;


class AboutUSController extends Controller
{

    public function team()
    {
        return view('team');
    }

    public function about()
    {
        return view('about');
    }

}