<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurpriseController extends Controller
{
    //
    public function index(){
        return view('surprise.index');
    }
}
