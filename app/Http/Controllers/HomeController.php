<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
    	return view('welcome');
    }

    public function user()
    {
    	return response()->json([
			    'name' => 'José',
			    'state' => 'PR',
			]);
    }

    public function dinamico($slug)
    {
    	echo $slug;
    }

    public function 
}
