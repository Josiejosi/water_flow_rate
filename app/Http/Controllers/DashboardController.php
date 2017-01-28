<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth ;

use Carbon\Carbon ;

use App\Models\DeviceHistory ;

class DashboardController extends Controller
{
   	public function index() {

   		$device1		= 0 ;
   		$device2		= 0 ;
   		$device3		= 0 ;
   		$device4		= 0 ;


   		if ( DeviceHistory::where('device_id', 1)->count() > 0 )
   			$device1 	= ( DeviceHistory::where('device_id', 1)->sum( "meter_reading" ) ) / 1000 ;


   		if ( DeviceHistory::where('device_id', 2)->count() > 0 )
   			$device2 	= ( DeviceHistory::where('device_id', 2)->sum( "meter_reading" ) ) / 1000 ;


   		if ( DeviceHistory::where('device_id', 3)->count() > 0 )
   			$device3 	= ( DeviceHistory::where('device_id', 3)->sum( "meter_reading" ) ) / 1000 ;


   		if ( DeviceHistory::where('device_id', 4)->count() > 0 )
   			$device4 	= ( DeviceHistory::where('device_id', 4)->sum( "meter_reading" ) ) / 1000 ;

   		$data = [

   			'name' 		=> Auth::user()->name . " " . Auth::user()->surname,
   			'member' 	=> Auth::user()->created_at->diffForHumans(),
   			'device1' 	=> round($device1, 2),
   			'device2' 	=> round($device2, 2),
   			'device3' 	=> round($device3, 2),
   			'device4' 	=> round($device4, 2),
   		] ;

   		return view( "pages.dashboard", $data ) ;

   	}

   	public function latestDash() {

   		$device1		= 0 ;
   		$device2		= 0 ;
   		$device3		= 0 ;
   		$device4		= 0 ;


   		if ( DeviceHistory::where( 'device_id', 1 )->count() > 0 )
   			$device1 	= round( ( ( DeviceHistory::where( 'device_id', 1 )->sum( "meter_reading" ) ) / 1000 ), 2 ) ;


   		if ( DeviceHistory::where( 'device_id', 2 )->count() > 0 )
   			$device2 	= round( ( ( DeviceHistory::where( 'device_id', 2 )->sum( "meter_reading" ) ) / 1000 ), 2 ) ;


   		if ( DeviceHistory::where( 'device_id', 3 )->count() > 0 )
   			$device3 	= round( ( ( DeviceHistory::where( 'device_id', 3 )->sum( "meter_reading" ) ) / 1000 ), 2 ) ;


   		if ( DeviceHistory::where( 'device_id', 4 )->count() > 0 )
   			$device4 	= round( ( ( DeviceHistory::where( 'device_id', 4 )->sum( "meter_reading" ) ) / 1000 ), 2 ) ;

   		$dash = "


			    <div class='col-lg-3 col-xs-6'>
			        <div class='small-box bg-green'>
			            <div class='inner'>
			                <h3>R $device1</h3>
			                <p>Device #01</p>
			            </div>
			            <div class='icon'>
			                <i class='fa fa-check'></i>
			            </div>
			        </div>
			    </div>


			    <div class='col-lg-3 col-xs-6'>
			        <div class='small-box bg-green'>
			            <div class='inner'>
			                <h3>R $device2</h3>
			                <p>Device #02</p>
			            </div>
			            <div class='icon'>
			                <i class='fa fa-check'></i>
			            </div>
			        </div>
			    </div>

			    <div class='col-lg-3 col-xs-6'>
			        <div class='small-box bg-green'>
			            <div class='inner'>
			                <h3>R $device3</h3>
			                <p>Device #03</p>
			            </div>
			            <div class='icon'>
			                <i class='fa fa-check'></i>
			            </div>
			        </div>
			    </div>

			    <div class='col-lg-3 col-xs-6'>
			        <div class='small-box bg-green'>
			            <div class='inner'>
			                <h3>R $device4</h3>
			                <p>Device #04</p>
			            </div>
			            <div class='icon'>
			                <i class='fa fa-check'></i>
			            </div>
			        </div>
			    </div>

   				" ;
   		return $dash ;

   	}


}
