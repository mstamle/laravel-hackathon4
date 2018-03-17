@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


<section id="banner">
    <div class="container">
        <h1>Polls</h1>
    </div>
</section>

<section id="questions">
    <div class="container">

        @foreach ($polls as $poll)
        <div class="question">

            <div class="question-right">
                <div class="question-name">
                    <a href="{{ route('show poll', ['code' => $poll->code])}}">{{ $poll->name }}</a>
                </div>
            </div>
        </div>
        @endforeach
        <br/>
        <a href="{{ action('PollController@create')}}" class="btn btn-primary">Create your new Poll here</a>
    </div>
</section>
@endsection
