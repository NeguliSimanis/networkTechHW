@extends('layouts.app')
@section('content')
    <div class="container">
        <body>
            <h1>Welcome, John!</h1>
            <h1>Select language</h1>
            <h1>Available save files</h1> 
            <h1>Save file table - download buttons</h1>    
            <a href="{{ url('upload') }}" class="btn btn-xs btn-info">Upload</a>
        </body>
    </div>
@endsection