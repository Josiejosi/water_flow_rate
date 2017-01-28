@extends('layouts.backend')

@section('display')

    <h1>
        Dashboard
        <small>Update personal details</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Profile Page</a></li>
    </ol>

@endsection

@section('content')


    <div class="login-box-body">
      <p class="login-box-msg">Change personal details</p>

        @if (Session::has('flash-message'))
            <div class="alert alert-warning">
                <strong>{{ Session::get('flash-message') }}</strong>
            </div>
        @endif

      <form action="{{ url('/profile') }}" method="post">
          {!! csrf_field() !!}
          <div class="form-group has-feedback">
              <input type="email" name="email" readonly="true" class="form-control" placeholder="Email" value="{{ Auth::user()->email }}">
              <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          @if ($errors->has('email'))
                <span class="help-block error-message">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
          @endif 

          <div class="form-group has-feedback">
              <input type="text" name="name" class="form-control" placeholder="Name" value="{{ Auth::user()->name }}">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          @if ($errors->has('name'))
                <span class="help-block error-message">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
          @endif 

          <div class="form-group has-feedback">
              <input type="text" name="surname" class="form-control" placeholder="Surname" value="{{ Auth::user()->surname }}">
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
              <button type="submit" class="btn btn-primary btn-block btn-flat">Update</button>
         </div>

      </form>
    </div>



@endsection

@section('javascripts')
	<script type="text/javascript">

@endsection