@extends('layouts.form')

<head>
    <meta charset="UTF-8">
    <title> HR - Register</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

@section('form')
    <h3>HR - Register</h3>
    <hr>

    <form role="form" method="POST" action="/auth/register">
        {!! csrf_field() !!}
        
        @include('include.error_template')
    
        <div class="form-group">
            <label for="email">Name</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>
    
        <div class="form-group">
            <label for="password">Email</label>
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>
    
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
    
        <div class="form-group">
            <label for="password">Confirm Password</label>
            <input class="form-control" type="password" name="password_confirmation">
        </div>
    
        <div>
            <button type="submit" class="btn btn-default">Register</button>
        </div>
    </form>

@endsection