@extends('layouts.profile')
@section('content')

<div class="container">
    <div class="row">
        <h2>Tweets</h2>
        @foreach($tweets as $tweet)

        <div class="d-flex pt-3">

            <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>

            <div class="accordion-item col-md-12">
                <h4 class="accordion-header" id="headingOne">
                    &#64;{{ $tweet->name}}
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     {{ $tweet->text}}
                    </button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                    <div class="accordion-body">
                        <h4>{{ $tweet->text }}</h4>
                        @if(Auth::id() == $tweet->user->id)
                        <a class="btn btn-primary" href="/tweets/{{ $tweet->id }}/edit">Edit Tweet</a>
                        <div class="offset-10">
                            <form action="/tweets/{{ $tweet-> id}}/delete" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-danger">Delete Tweet</button>
                            </form>
                        </div>
                        @endif
                        <div class="mt-2">
                            <h5>Add Comment</h5>
                        </div>

                        <div class="input-group mb-3 ">
                            <form action="/comments?tweetid={{ $tweet->id }}" method="POST">
                                @csrf
                                <input type="text" class="form-control w-100" placeholder="Add comment" id="comment" name="text" maxlength="25" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <button class="btn btn-primary mt-2">Add Comment</button> @error('text')
                                <div>{{ $messsage }}</div>
                                @enderror
                            </form>

                        </div>
                        <div class="">
                            <h5 class="offset-1">Comments</h5>
                            @forelse ($tweet -> comments as $comment)
                            <div class="d-flex text-muted pt-3 offset-1">
                                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                                <p class="pb-3 mb-0 small lh-sm border-bottom">
                                    <strong class="d-block text-gray-dark">&#64;{{ $comment->user->name }} </strong> {{ $comment->text}}
                                </p>
                            </div>
                            @empty
                            <p class="offset-1">--No Comments Available--</p>
                            @endforelse
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection