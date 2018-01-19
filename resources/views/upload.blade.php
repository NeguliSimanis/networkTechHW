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
                    <label class="upload-label">Select xml file to upload:</label>
                <input type="file" name="file" id="file" class="center">
                <input type="submit" value="Upload" name="submit" class="center upload-button">
                    <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
            <a href="{{ url('main') }}" class="btn btn-danger upload-button">Return</a>
            
            <!-- Scripts -->
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
            
            <script>
                @if(Session::has('message'))
                    var type="{{Session::get('alert-type','info')}}"


                    switch(type){
                        case 'info':
                             toastr.info("{{ Session::get('message') }}");
                             break;
                        case 'success':
                            toastr.success("{{ Session::get('message') }}");
                            break;
                        case 'warning':
                            toastr.warning("{{ Session::get('message') }}");
                            break;
                        case 'error':
                            toastr.error("{{ Session::get('message') }}");
                            break;
                    }
                @endif
            </script>

            
        </body>
    </div>
@endsection