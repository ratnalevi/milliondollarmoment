<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    //
    public function index(){
        return view('services.index');
    }

    public function surprises(){
    	return view('services.surprises.index');	
    }

    public function test(){
    	return view('services.test');	
    }

    public function birthday(){
        return view('services.surprises.birthday');   
    }
}
