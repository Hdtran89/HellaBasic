<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use NewsLetter;
class HomeController extends Controller
{
    public function index(Request $request){
    	$view = View('home');
    	return $view;
    }

    public function subscribe(Request $request){
    	$email = $request->email;
    	NewsLetter::subscribe($email);
    	return Redirect::back();
    }
}
