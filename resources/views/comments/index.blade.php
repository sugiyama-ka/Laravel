@extends('layouts.app')

@section('content')
    @foreach($books as $book)
        <main class="container py-3">
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h6 class="border-bottom border-gray pb-2 mb-0">{{ $book->title }}</h6>

                @foreach($book->comments->sortBy('id') as $comment)
                    <div class="media text-muted pt-3">
                        <img alt="" class="mr-2 rounded" src="{{ asset('/storage/img/'.$comment->user->icon) }}"
                             style="width: 32px; height: 32px;">
                        <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                            <strong class="d-block text-gray-dark">{{ $comment->user->name }}</strong>
                            {{ $comment->message }}
                        </p>
                    </div>
                @endforeach

                <small class="d-block text-right mt-3">
                    <a href="{{ route('comment_create', $book->id ) }}" class="btn btn-success">コメント</a>
                </small>
            </div>
        </main>
    @endforeach

@endsection


