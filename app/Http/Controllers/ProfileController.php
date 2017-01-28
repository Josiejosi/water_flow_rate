<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth ;

class ProfileController extends Controller
{
    public function index() {

   		$data 			= [

   			'name' 		=> Auth::user()->name . " " . Auth::user()->surname,
   			'member' 	=> Auth::user()->created_at->diffForHumans(),

   		] ;

    	return view( 'pages.profile', $data ) ;
    }

    public function postProfile( Request $request ) {
		$validator 		= $this->validate($request, [
		    'name' 		=> 'required',
		    'surname' 	=> 'required',
		]);

		$user 			= \App\Models\User::where('id', Auth::user()->id)->update([
			'name'		=> $request->name, 
			'surname'	=> $request->surname,
		]) ;

		return redirect()->back() ;
    }
}
