@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1>Larabook demo</h1>
        <p class="lead">Welcome to Larabook!</p>
        @if(Auth::guest())
        <p>
            {{link_to_route('register_path','Sign Up',null,['class'=>'btn btn-lg btn-primary'])}}

        </p>
        @endif
    </div>
@stop