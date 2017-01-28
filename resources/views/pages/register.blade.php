@extends('layouts.front')

@section('content')

	<div class="login-box-body">
	  <p class="login-box-msg">Sign UP</p>

	    @if (Session::has('flash-message'))
	        <div class="alert alert-warning">
	            <strong>{{ Session::get('flash-message') }}</strong>
	        </div>
	    @endif

	  <form action="{{ url('/register') }}" method="post">
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
	          <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
	          <span class="glyphicon glyphicon-user form-control-feedback"></span>
	      </div>
	      @if ($errors->has('name'))
	            <span class="help-block error-message">
	                <strong>{{ $errors->first('name') }}</strong>
	            </span>
	      @endif 

	      <div class="form-group has-feedback">
	          <input type="text" name="surname" class="form-control" placeholder="Surname" value="{{ old('surname') }}">
	          <span class="glyphicon glyphicon-user form-control-feedback"></span>
	      </div>
	      @if ($errors->has('surname'))
	            <span class="help-block error-message">
	                <strong>{{ $errors->first('surname') }}</strong>
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
	          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign UP</button>
	     </div>

	  </form>
	</div>

	<a href="{{ url('/forgot') }}">forgot password?</a><br>
	<a href="{{ url('/') }}" class="text-center">Login</a>

@endsection