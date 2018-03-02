@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>{{ $shownPoll->name }}</h1>


    <p>Here we will show the list of options that belong to this question</p>

    <a href="{{ action('OptionController@create', [$shownPoll->code]) }}">Add more options for this questions</a>

    </div>

@endsection