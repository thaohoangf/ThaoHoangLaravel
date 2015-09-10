@extends('layout.master')

@section('title')
    Login
@stop

@section('content')
    <form action="{{URL::asset('login')}}" method="post" role="form">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
@stop

