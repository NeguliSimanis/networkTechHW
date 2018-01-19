@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="panel-body">
        <body>
            <h1 class="center">{{__('webContent.welcome') }}</h1>
            
            <div class="startpanel center">
               <!--  <div class="startbutton center"> -->
                    <a class="btn btn-danger startbutton" href="{{ route('glogin') }}"> Register</a>
               <!--  </div>
                <div class="startbutton center">-->
                    <a class="btn btn-danger startbutton" href="{{ route('glogin') }}"> Login</a>
               <!--  </div>
                <div class="startbutton center">-->
                    <a class="btn btn-danger startbutton" href="{{ route('glogin') }}"> Login with Google</a>
               <!--  </div>
                <div class="startbutton center ">-->
                    <a href="{{ url('main') }}" class="btn btn-info startbutton">Continue without login</a>
               <!-- </div>-->
            </div>
            
            <meta name="google-signin-client_id" content="769663979583-fb17j53uhbrt5k53pq2mttngm8418tc6.apps.googleusercontent.com">
        </body>
    </div>
@endsection
