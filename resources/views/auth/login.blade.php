@extends('layouts.form')
<head>
    <meta charset="UTF-8">
    <title> HR - Login</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

@section('form')
    <h3>HR - Login</h3>
    <hr>
    <form role="form" method="POST" action="/auth/login" >
        {!! csrf_field() !!}
        @include('include.error_template')
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
        </div>
    
         <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
    
         <div class="checkbox">
             <label><input type="checkbox"> Remember me</label>
        </div>
        
        <button type="submit" class="btn btn-default">Login
    </form>
    </br>
    <div>
        </button><a href="{{{ route('registration') }}}">Register</a>
    </div>
@endsection