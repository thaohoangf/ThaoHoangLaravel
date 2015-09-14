@extends('app')


@section('link')
    <li><a href="list-users.blade.php">List Users</a> <span class="divider">></span></li>
    <li class="active">Edit</li>
@stop


@section('content')
    <div class="workplace">

        <div class="row-fluid">

            <div class="span12">
                <div class="head">
                    <div class="isw-grid"></div>
                    <h1>Users Management</h1>

                    <div class="clear"></div>
                </div>
                <div class="block-fluid">
                    @foreach($userInfor as $user)
                    <form method="post" enctype="multipart/form-data" action="{{ asset('edit-user/'.$user->id) }}">
                        {!! csrf_field() !!}
                    	<div class="row-form">
                            <div class="span3">Username:</div>
                            <div class="span9">
                                <input type="text" value="{{ $user->name }}" name="username"/>
                                @if(count($errors))
                                    {{ $errors->first('username') }}
                                @endif
                            </div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Email:</div>
                            <div class="span9"><input type="email" value="{{ $user->email }}" name="email"/></div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Password:</div>
                            <div class="span9">
                                <input type="password" placeholder="some text value..." name="password"/>
                                @if(count($errors))
                                    {{ $errors->first('password') }}
                                @endif
                            </div>
                            <div class="clear"></div>
                        </div> 
                    	<div class="row-form">
                            <div class="span3">Upload Avatar:</div>
                            <div class="span9">
                            <img src="{{ asset('upload/'.$user->name.'_avatar.jpg') }}" /><br/>
                            <input type="file" name="avatar" size="19">
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="row-form">
                            <div class="span3">Activate:</div>
                            <div class="span9">
                                <select name="activate">
                                    @if($user->activate == '1')
                                        <option value="1">Activate</option>
                                    @elseif($user->activate == '2')
                                        <option value="2">Deactivate</option>
                                    @else
                                        <option value="0">choose a option...</option>
                                    @endif

                                </select>
                            </div>
                            <div class="clear"></div>
                        </div>
                        @endforeach
                        <div class="row-form">
                        	<button class="btn btn-success" type="submit">Update</button>
							<div class="clear"></div>
                        </div>
                    </form>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
        <div class="dr"><span></span></div>

    </div>
@stop