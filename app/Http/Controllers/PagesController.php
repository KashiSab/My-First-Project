<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact() {
    	$people = [
    		'Kashif', 'Asim', 'Zaighum', 'Ding Dong'
    	];
    	return view('contact', compact('people'));
    }
}
