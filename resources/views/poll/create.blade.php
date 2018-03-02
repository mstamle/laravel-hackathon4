@extends('layouts.app')
@section('content')

<div class="container">

        <h2 class="form-signin-heading">Create a new poll</h2>

        <form method="post" action=>
            {!! csrf_field() !!}
            <label class="sr-only">Question</label>
            <input class="form-control" name="name" placeholder="Question" required autofocus><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit me vole</button>
        </form>

    </div>
    @endsection

