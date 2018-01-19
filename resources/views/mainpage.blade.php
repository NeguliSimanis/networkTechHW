@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="panel-body">
            
            <h1 class="center">Available save files</h1>
            
            <!-- Table with uploaded files -->
            <ul>
                @foreach ($files as $file)
                    <li>{{ $file }}</li>
                @endforeach
            </ul>
            <?php echo app()->getLocale();?>
            <div class="center"> 
                <a href="{{ url('upload') }}" class="btn btn-xs btn-info">Upload</a>
            </div>
       </div>
    </div>
@endsection