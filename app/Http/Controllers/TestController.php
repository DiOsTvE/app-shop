<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //Método welcome que devuelva la vista welcome
    public function welcome(){
    	return view('welcome');
    }
}
