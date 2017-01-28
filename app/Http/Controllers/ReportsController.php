<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth ;

use App\Models\DeviceHistory ;

class ReportsController extends Controller
{
    public function report_one() {

    	$meter 			= DeviceHistory::where('device_id', 1)->get() ;
   		$data 			= [

   			'name' 		=> Auth::user()->name . " " . Auth::user()->surname,
   			'member' 	=> Auth::user()->created_at->diffForHumans(),
   			'meters'		=> $meter,

   		] ;

    	return view( 'pages.1', $data ) ;
    }

    public function report_two() {

    	$meter 			= DeviceHistory::where('device_id', 2)->get() ;
   		$data 			= [

   			'name' 		=> Auth::user()->name . " " . Auth::user()->surname,
   			'member' 	=> Auth::user()->created_at->diffForHumans(),
   			'meters'		=> $meter,

   		] ;

    	return view( 'pages.2', $data ) ;
    }

    public function report_three() {

    	$meter 			= DeviceHistory::where('device_id', 3)->get() ;
   		$data 			= [

   			'name' 		=> Auth::user()->name . " " . Auth::user()->surname,
   			'member' 	=> Auth::user()->created_at->diffForHumans(),
   			'meters'		=> $meter,

   		] ;

    	return view( 'pages.3', $data ) ;
    }

    public function report_four() {

    	$meter 			= DeviceHistory::where('device_id', 4)->get() ;
   		$data 			= [

   			'name' 		=> Auth::user()->name . " " . Auth::user()->surname,
   			'member' 	=> Auth::user()->created_at->diffForHumans(),
   			'meters'		=> $meter,

   		] ;

    	return view( 'pages.4', $data ) ;
    }
}
