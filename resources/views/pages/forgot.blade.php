@extends('layouts.front')

@section('content')

	<div class="login-box-body">
	  <p class="login-box-msg">Forgot Password</p>

	    @if (Session::has('flash-message'))
	        <div class="alert alert-warning">
	            <strong>{{ Session::get('flash-message') }}</strong>
	        </div>
	    @endif

	  <form action="{{ url('/forgot') }}" method="post">
	  	  {!! csrf_field() !!}
	      <div class="form-group has-feedback">
	          <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
	          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	      </div>
	      @if ($errors->has('email'))
	            <span class="help-block error-message">
	                <strong>{{ $errors->first('email') }}</strong>
	            </span>
	      @endif 

	      <div class="form-group has-feedback">
	          <input type="password" name="pass" class="form-control" placeholder="New Password" value="{{ old('pass') }}">
	          <span class="glyphicon glyphicon-user form-control-feedback"></span>
	      </div>
	      @if ($errors->has('pass'))
	            <span class="help-block error-message">
	                <strong>{{ $errors->first('pass') }}</strong>
	            </span>
	      @endif 
	      <div class="col-xs-4">
	          <button type="submit" class="btn btn-success btn-block btn-flat">Update</button>
	     </div>

	  </form>
	</div>

	<a href="{{ url('/register') }}">Register?</a><br>
	<a href="{{ url('/') }}" class="text-center">Login</a>

@endsection