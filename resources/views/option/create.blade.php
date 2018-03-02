@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">Create a new option</h2>

        <form method="post" action=>
            {!! csrf_field() !!}
            <label class="sr-only">New option</label>
            <input class="form-control" name="name" placeholder="Question" required autofocus><br>

            <select name="" id="">
            @foreach($polls as $poll)
                <option value="{{$poll->id}}">{{$poll->name}}</option>
            @endforeach
            </select>


            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit me vole, quick!</button>
        </form>

    </div>
    @endsection

