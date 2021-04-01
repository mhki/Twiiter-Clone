@extends('layouts.main')
@section('main')

<h3>Edit Tweet</h3>

<form action="/tweets/{{ $tweet->id }}/edit" method="POST">
    @csrf @method('PUT')
    <div>
        Edit Tweet(25 Characters Long)
    </div>
    <div>
        <input class="form-control" name="text" id="tweet-text" type="text" value="{{ $tweet->text }}">

    </div>
    <div>
        <button class="btn btn-primary" type="submit">
            Edit Tweet
        </button>
    </div>
</form>
@endsection