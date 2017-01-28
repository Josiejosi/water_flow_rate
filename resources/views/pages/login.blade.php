@extends('layouts.front')

@section('content')

	<div class="login-box-body">
	  <p class="login-box-msg">Sign in</p>

	    @if (Session::has('flash-message'))
	        <div class="alert alert-warning">
	            <strong>{{ Session::get('flash-message') }}</strong>
	        </div>
	    @endif

	  <form action="{{ url('/login') }}" method="post">
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
	          <input type="password" name="pword" class="form-control" placeholder="Password">
	          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	      </div>
	      @if ($errors->has('pword'))
	            <span class="help-block error-message">
	                <strong>{{ $errors->first('pword') }}</strong>
	            </span>
	      @endif 
	      <div class="col-xs-4">
	          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
	     </div>

	  </form>
	</div>

	<a href="{{ url('/forgot') }}">forgot password?</a><br>
	<a href="{{ url('/register') }}" class="text-center">Register</a>

@endsection