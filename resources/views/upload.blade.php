@extends('layouts.app')
@section('content')
    <div class="container center">
        <body>
            <h1 class="center">Save File Upload</h1>
            
            <!-- Display upload errors -->
            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                     <li>{{ $error }} </li>
                    @endforeach
                </ul>
            @endif
            
            <!-- Display uploaded file -->
            <!--<ul>
                @foreach ($files as $file)
                    <li>{{ $file }}</li>
                @endforeach
            </ul>-->
            
            <!-- Upload form -->
            <form class="center" action="{{ URL::to('upload/complete') }}" method="post" enctype="multipart/form-data">
                    <label>Select xml file to upload:</label>
                <input type="file" name="file" id="file" class="center">
                <input type="submit" value="Upload" name="submit" class="center">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
        </body>
    </div>
@endsection