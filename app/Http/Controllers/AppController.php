<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageEvent;


class AppController extends Controller
{
    //
    public function index(){
    	return view('main');
    }

    public function send()
    {
    	for ($i=0; $i < 10; $i++) 
    	{ 
	    	$message = ['sms' => 'joo' . $i];
	    	event(new MessageEvent($message));
	    	sleep(1);
    	}
    }
}
