@extends('layouts.app')
@section('content')
    <div class="container">
        <title>Registration!</title>
        {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
    </div>
@endsection