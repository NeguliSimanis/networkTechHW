@extends('layouts.app')
@section('content')
    <div class="container">
        <body>
            <h1>Welcome to Save File Sharing System!</h1>
            <button>Register</button>
            <button>Login</button>
            <a href="{{ url('main') }}" class="btn btn-xs btn-info pull-right">Continue without login</a>
        </body>
    </div>
@endsection
