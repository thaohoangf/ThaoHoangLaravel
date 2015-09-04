<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="{{URL::asset('login')}}">
    {!! csrf_field() !!}
    <div>
        Email
        <input type="text" name="username" value="">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>