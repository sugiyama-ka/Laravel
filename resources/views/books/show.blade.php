@extends('layouts.app')
@section('content')
<main class="container py-3">
    <div class="row">
        <div class="col-sm">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="{{ url('books') }}" class="btn btn-light">戻る</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ url('books/'.$book->id.'/edit') }}" class="btn btn-success">編集</a>
                </li>
                <li class="list-inline-item">
                    <form action="{{ url('books/'.$book->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <table class="table">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $book->id }}</td>
                    </tr>
                    <tr>
                        <th>タイトル</th>
                        <td>{{ $book->title }}</td>
                    </tr>
                    <tr>
                        <th>出版社</th>
                        <td>{{ $book->publisher }}</td>
                    </tr>
                    <tr>
                        <th>価格</th>
                        <td>{{ $book->price }}</td>
                    </tr>
                    <tr>
                        <th>概要</th>
                        <td>{!! nl2br($book->overview) !!}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection