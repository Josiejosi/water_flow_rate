@extends('layouts.backend')

@section('display')

    <h1>
        Dashboard
        <small>view active devices</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Device 4 Report</a></li>
    </ol>

@endsection

@section('content')

<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Device 4 Daily Usage</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            	<div class="row">
            		<div class="col-sm-6"></div>
            		<div class="col-sm-6"></div>
            	</div><div class="row">
            	<div class="col-sm-12">
            	<table id="example2" class="table table-bordered table-hover dataTable" role="grid">
                    <thead>
                      	<tr role="row">
                      		<th>Date</th>
                      		<th>Usage</th>
                      		<th>Amount (R)</th>
                    	</tr>
                    </thead>
                    <tbody>
                     

	                    @if ( count( $meters ) > 0 )

	                    	@foreach( $meters as $meter )


		                    <tr role="row" class="odd">
		                        <td class="sorting_1">{{ $meter->captured_at }}</td>
		                        <td>{{ round( ( ( $meter->meter_reading / 1000 ) * 100 ) , 2) }} %</td>
		                        <td>R {{ round( ($meter->meter_reading / 1000 ), 2 ) }}</td>
		                    </tr>


	                    	@endforeach

	                    @else

	                    <tr role="row" class="odd">
	                        <td class="sorting_1" colspan="3">No records found</td>
	                    </tr>

	                    @endif
					</tbody>

                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascripts')
	<script type="text/javascript">

@endsection