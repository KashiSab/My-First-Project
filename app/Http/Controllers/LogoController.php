<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logo;

class LogoController extends Controller
{
    public function logo() {
    	$path  = Logo::latest()->orderBy('id', 'desc')->first();
    	// dd($path);
        return view('logo.logo',compact('path'));
    }
     public function store(Request $request) {

         $request->validate([
		    'logo' => 'required|mimes:jpg,png',
		]);

        $change_logo  = new Logo();
        
        $fileName = $request->file('logo')->getClientOriginalName();
        
       $path  =  time() . '.' .  $request->file('logo')->move(public_path().'/assets/images', $fileName);
        // $logo->move(public_path().'/assets/images', $filename);
       	// dd($path);
		$change_logo->fill([	
			'logo' => $path,
			'type' => 'image'	
		])->save();

		return redirect(url('logo'));          

    }
}
