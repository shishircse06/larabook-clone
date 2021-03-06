@extends('layouts.default')

@section('content')
    <div class="status-post">

        @include('layouts.partials.errors')
        {{ Form::open(['route' => 'statuses_path']) }}
        <!-- Status Form Input -->
        <div class="form-group">

            {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => "What's on your mind?"]) }}
        </div>

        <div class="form-group status-post-submit">
            {{ Form::submit('Post Status', ['class' => 'btn btn-default btn-primary']) }}
        </div>
        {{ Form::close() }}

        <h2>Statuses</h2>
        @foreach($statuses as $status)
            <article>
                {{$status->body}}
            </article>
        @endforeach
    </div>

@stop