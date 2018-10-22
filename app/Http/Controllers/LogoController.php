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

        $change_logo  = Logo::get()->first();
        
         if($request->hasfile('logo'))
        {
            $fileName = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('/assets/images'), $request->file('logo')->getClientOriginalName());
            $path  = 'assets/images/'.$fileName;
    		
            if($change_logo != null){
                $change_logo->fill([	
        			'logo' => $path
        		])->save();
            }else{
                (new Logo())->fill([    
                    'logo' => $path,
                    'type' => 'image'   
                ])->save();
            }
        }

        // $logo->move(public_path().'/assets/images', $filename);

		return redirect(url('logo'));          

    }
}
