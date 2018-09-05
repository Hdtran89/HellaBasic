<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Redirect;
class HomeController extends Controller
{
    public function index(Request $request){
    	$view = View('home');
    	return $view;
    }

    public function subscribe(Request $request){
    	$email = $request->email;
    	if(Newsletter::isSubscribed((string)$email)){
			return Redirect::back()->with('message', "You have already sign up.");
		} else {
			Newsletter::subscribe((string)$email);
			return Redirect::back();
		}
    	
    }
}
