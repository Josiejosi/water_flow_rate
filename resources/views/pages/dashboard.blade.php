@extends('layouts.backend')

@section('display')

    <h1>
        Dashboard
        <small>view active devices</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Dash</a></li>
    </ol>

@endsection

@section('content')

	<div class="row" id="latest_dash">
	    <div class='col-lg-3 col-xs-6'>
	        <div class='small-box bg-green'>
	            <div class='inner'>
	                <h3>R {{ $device1 }}</h3>
	                <p>Device #01</p>
	            </div>
	            <div class="icon">
	                <i class="fa fa-check"></i>
	            </div>
	        </div>
	    </div>


	    <div class='col-lg-3 col-xs-6'>
	        <div class='small-box bg-green'>
	            <div class='inner'>
	                <h3>R {{ $device2 }}</h3>
	                <p>Device #02</p>
	            </div>
	            <div class="icon">
	                <i class="fa fa-check"></i>
	            </div>
	        </div>
	    </div>

	    <div class='col-lg-3 col-xs-6'>
	        <div class='small-box bg-green'>
	            <div class='inner'>
	                <h3>R {{ $device3 }}</h3>
	                <p>Device #03</p>
	            </div>
	            <div class="icon">
	                <i class="fa fa-check"></i>
	            </div>
	        </div>
	    </div>

	    <div class='col-lg-3 col-xs-6'>
	        <div class='small-box bg-green'>
	            <div class='inner'>
	                <h3>R {{ $device4 }}</h3>
	                <p>Device #04</p>
	            </div>
	            <div class="icon">
	                <i class="fa fa-check"></i>
	            </div>
	        </div>
	    </div>

	</div>


	<div class="box box-solid bg-blue-gradient">
	    <div class="box-header">
	        <i class="fa fa-check"></i>
	        <h3 class="box-title">Water Usage</h3>
	        <div class="pull-right box-tools">
	            <button class="btn btn-default btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
	        </div>
	    </div>
	    <div class="box-body no-padding">
	        <div id="calendar" style="width: 100%"></div>
	    </div>
	    <div class="box-footer text-black">
	        <div class="row">
	            <div class="col-sm-6">
	                <div class="clearfix">
	                    <span class="pull-left">Device #01</span>
	                    <small class="pull-right">{{ ($device1 * 100) + rand(10,25) }}%</small>
	                </div>
	                <div class="progress xs">
	                    <div class="progress-bar progress-bar-green" style="width: {{ ($device1 * 100) + rand(10,25) }}%;"></div>
	                </div>

	                <div class="clearfix">
	                    <span class="pull-left">Device #02</span>
	                    <small class="pull-right">{{ ($device2 * 100) + rand(10,25) }}%</small>
	                </div>
	                <div class="progress xs">
	                    <div class="progress-bar progress-bar-green" style="width: {{ ($device2 * 100) + rand(10,25) }}%;"></div>
	                </div>
	            </div>


	            <div class="col-sm-6">
	                <div class="clearfix">
	                    <span class="pull-left">Device #03</span>
	                    <small class="pull-right">{{($device3 * 100) + rand(10,25) }}%</small>
	                </div>
	                <div class="progress xs">
	                    <div class="progress-bar progress-bar-green" style="width: {{ ($device3 * 100) + rand(10,25) }}%;"></div>
	                </div>

	                <div class="clearfix">
	                    <span class="pull-left">Device #04</span>
	                    <small class="pull-right">{{ ($device4 * 100) + rand(10,25) }}%</small>
	                </div>
	                <div class="progress xs">
	                    <div class="progress-bar progress-bar-green" style="width: {{ ($device4 * 100) + rand(10,25) }}%;"></div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>


@endsection

@section('javascripts')
	<script type="text/javascript">
		var update_meter_rand = function() {
			$.get( '/latest_dashboard', function( data ) {
				$("#latest_dash").html(data) ;
			}) ;
		} ;

		var meter_loop = setInterval( update_meter_rand, 2000 ) ;
	</script>
@endsection