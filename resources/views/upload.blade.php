@extends('layouts.app')
@section('content')
    <div class="container">
        <body>
            <h1>Save File Upload</h1>
            
            <!-- Display upload errors -->
            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                     <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            
            <!-- Display uploaded file -->
            <ul>
                @foreach ($files as $file)
                    <li>{{ $file }}</li>
                @endforeach
            </ul>
            
            <!-- Upload form -->
            <form action="{{ URL::to('upload/complete') }}" method="post" enctype="multipart/form-data">
                    <label>Select xml file to upload:</label>
                <input type="file" name="file" id="file">
                <input type="submit" value="Upload" name="submit">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
        </body>
    </div>
@endsection