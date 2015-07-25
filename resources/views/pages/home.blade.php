@extends('layouts.pagemaster')

@section('title', 'Home | Project Flyer')

@section('content')
    <div class="jumbotron">
        <h1>Project Flyer</h1>
        <p>
            This is a jumbotron
        </p>

        <a href="{{ route('flyers.create') }}" class="btn btn-primary">Create a Flyer</a>

    </div>
@stop