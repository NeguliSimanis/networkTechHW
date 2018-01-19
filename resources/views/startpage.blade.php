@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="panel-body">
        <body>
            <h1 class="center">{{__('webContent.welcome') }}</h1>
            <button>Register</button>
            <button>Login</button>
             <a class="btn btn-danger" href="{{ route('glogin') }}"> Login with Google</a>
            <a href="{{ url('main') }}" class="btn btn-xs btn-info pull-right">Continue without login</a>
            <?php echo app()->getLocale();?>
            <meta name="google-signin-client_id" content="769663979583-fb17j53uhbrt5k53pq2mttngm8418tc6.apps.googleusercontent.com">
        </body>
    </div>
@endsection
