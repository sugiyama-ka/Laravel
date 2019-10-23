@extends('layouts.app')

@section('content')
    <main class="container py-3">

        <div class="row">
            <div class="col-sm">
                <form action="{{ route('comment_store', $book_id) }}" method="post">
                    @csrf

                    @include('layouts.alert', ['errors' => $errors])
                    <div class="form-group">
                        <label for="user_id">ユーザー</label>
                        <select class="form-control" id="user_id" name="user">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">メッセージ</label>
                        <input type="text" class="form-control " id="message" name="message" value="">
                    </div>

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ route('comments_index') }}" class="btn btn-secondary">キャンセル</a>
                        </li>
                        <li class="list-inline-item">
                            <button type="submit" class="btn btn-primary">投稿</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </main>

@endsection

