<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
    	return view( 'pages.login' ) ;
    }
    public function register() {
    	return view( 'pages.register' ) ;
    }

    public function postLogin(Request $request) {

		$validator = $this->validate($request, [
		    'email' 	=> 'required|max:255',
		    'pword' 	=> 'required|max:12||min:6',
		]);

	    if ( \Auth::attempt(['email' => $request->email, 'password' => $request->pword]) ) {
	    	return redirect()->intended( 'dashboard' ) ;
        } else {
        	\Session::flash('flash-message', 'Wrong login credentials, please try again') ;
        	return redirect()->back()->withInput() ;
        }

    }

    public function postRegister(Request $request) {

		$validator 		= $this->validate($request, [
		    'email' 	=> 'required|max:255|unique:users',
		    'name' 		=> 'required',
		    'surname' 	=> 'required',
		    'pword' 	=> 'required|max:12||min:6',
		]);

		$user 			= \App\Models\User::create([
			'name'		=> $request->name, 
			'surname'	=> $request->surname, 
			'email'		=> $request->email, 
			'password'	=> bcrypt($request->pword), 
			'type'		=> 1,
		]) ;

	    if ( \Auth::attempt(['email' => $request->email, 'password' => $request->pword]) ) {
            
	    	return redirect()->intended( 'dashboard' ) ;

        } else {
        	\Session::flash('flash-message', 'Wrong login credentials, please try again') ;
        	return redirect()->back()->withInput() ;
        }

    }

    public function logout() {
    	\Auth::logout() ;
    	return redirect('/') ;
    }
}
