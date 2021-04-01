@extends('layouts.main') 
@section('main')


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
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <h4>{{ $tweet->text }}</h4>

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
                            <p class="offset-1">--No Comments available--</p>
                            @endforelse

                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>


</main>
@endsection