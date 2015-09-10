@extends('layout.master')

@section('title')
    Register
@stop

@section('content')
    <form action="{{URL::asset('register')}}" method="post" role="form">
    	{!! csrf_field() !!}
    	<div class="form-group">
    		<label for="">Name</label>
    		<input type="text" class="form-control" name="name">
    	</div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    
    	<button type="submit" class="btn btn-primary">Register</button>
    </form>
@stop

