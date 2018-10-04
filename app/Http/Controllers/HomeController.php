<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use Redirect;
use Illuminate\Support\Facades\Input;
use App\Subscriber;
class HomeController extends Controller
{
    public function index(Request $request){
    	$view = View('home');
    	return $view;
    }

    public function subscribe(Request $request){
    	
    	if(!Newsletter::isSubscribed($request->email)){
            if (!Subscriber::where('email', '=', Input::get('email'))->exists()) {
                $subscriber = new \App\Subscriber;
                $subscriber->email = $request->email;
                $subscriber->save();
                Newsletter::subscribe($request->email);
                return view('home');
            }
		}
        return Redirect::back()->with('failure', "Failed signing up please try again.");
    }
}
