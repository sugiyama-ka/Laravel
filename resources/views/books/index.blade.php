@extends('layouts.app')
@section('content')
<main class="container py-3">
    <div class="row">
        <div class="col-sm">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="{{ url('books/create') }}" class="btn btn-success">新規</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">タイトル</th>
                        <th class="text-center">出版社</th>
                        <th class="text-center">価格</th>
                        <th class="text-center">概要</th>
                    </tr>
                </thead>
                <tbody>
                    {{--
                    foreach は $books の要素を1つずつ取り出し、$bookとして参照可能にします。
                    $books が5つあった場合、@foreach と @endforeach の範囲が5回実行されます。
                    --}}
                    @foreach ($books as $book)
                        <tr>
                            <td class="text-center">{{ $book->id }}</td>
                            <td><a href="{{ url('books/'.$book->id) }}">{{ $book->title }}</a></td>
                            <td>{{ $book->publisher }}</td>
                            <td class="text-right">{{ $book->price }}</td>
                            <td>{{ $book->overview }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection