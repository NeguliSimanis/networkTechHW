@extends('layouts.app')
@section('content')
    <div class="container">
       <div class="panel-body">
            
            <h1 class="center">Available save files</h1>
            
            <!-- Table with uploaded files -->
            <div class="startpanel center">
                <table id="file-table">
                    <!-- Header row -->
                    <tr>
                        <th>Save File</th>
                        <th>Upload Date</th>
                        <th>Uploaded by</th>
                        <th>Resources</th>
                        <th></th>
                    </tr>
                    
                    <!-- Data -->
                    @foreach ($files as $file)
                    <tr>
                        <th>{{ $file->filename }}</th>
                        <th>{{ $file->created_at }}</th>
                        <th></th>
                        <th>Ducats</th>
                        <th><button>Download</button></th>
                    </tr>
                    @endforeach
                </table>
            </div>
            
            <div class="center"> 
                <a href="{{ url('upload') }}" class="btn btn-info">Upload</a>
            </div>
       </div>
    </div>
@endsection