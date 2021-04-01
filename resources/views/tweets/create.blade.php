@extends('layouts.main')

@section('main')
    <h3>Create Tweet</h3>

    <form action="/tweets/create" method="POST">
        @csrf
    <div>
        Tweet(25 Characters Long)
    </div>
    <div>
        <textarea class="form-control" name="text" id="tweet-text"></textarea>
    </div>
    <div>
        <button class="btn btn-primary" type="submit">
            Add Tweet
        </button>
    </div>
    </form>
@endsection