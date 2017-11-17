<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	return view('pages.index');
    }
    public function about(){
    	return view('pages.about');
    }
    public function services(){
    	$data = array(
    		'title' => 'services :)',
    		'services' => ['first serveice', 'second service']
    	);
    	
    	return view('pages.services')->with($data);
    }

    public function price(){
    	$data = url("https://api.coinmarketcap.com/v1/ticker/");
    	return view('pages.price', compact($data));
    }
}
