@extends('layouts.app')
@section('content')



<div class="container">

        <h2 class="form-signin-heading">Create a new option</h2>

        <form method="post" action= "{{ action('OptionController@store') }} ">
            {!! csrf_field() !!}
            <input type="hidden" name="poll_id" value="{{ $shownPoll->id }}">

            <label class="sr-only">New option</label>
            <input class="form-control" name="name" placeholder="Option" required autofocus><br>
            <div class="form-group">
            <label>Poll</label>
            <select class="form-control" name="poll">
                @foreach($polls as $poll)
                    <option value=" {{$poll->id}} "> {{$poll->name}} </option>
                @endforeach
            </select>
            </div>



            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit me vole, quick!</button>
        </form>

    </div>
    @endsection

