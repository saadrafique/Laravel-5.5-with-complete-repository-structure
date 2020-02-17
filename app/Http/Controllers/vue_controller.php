<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vue_controller extends Controller
{
    //

    public function index(){
    	return view('vue.index');
    }

    public function component_excercise(){
    	return view('vue.component_excercise');
    }

    public function component_communication(){
    	return view('vue.component_communication');
    }
}
