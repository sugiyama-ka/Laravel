@extends('layouts.app')
@section('content')
<main class="container py-3">
    @include('layouts.alert', ['errors' => $errors])
    <div class="row">
        <div class="col-sm">
            <form action="{{ url('books') }}" method="post">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control @if($errors->has('title')) is-invalid @endif" id="title" name="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="publisher">出版社</label>
                    <input type="text" class="form-control @if($errors->has('publisher')) is-invalid @endif" id="publisher" name="publisher" value="{{ old('publisher') }}">
                </div>

                <div class="form-group">
                    <label for="price">価格</label>
                    <input type="number" class="form-control @if($errors->has('price')) is-invalid @endif" id="price" name="price" value="{{ old('price') }}">
                </div>

                <div class="form-group">
                    <label for="overview">概要</label>
                    <textarea class="form-control @if($errors->has('overview')) is-invalid @endif" id="overview" name="overview" value="{{ old('overview') }}"></textarea>
                </div>

                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="{{ url('books') }}" class="btn btn-secondary">キャンセル</a>
                    </li>
                    <li class="list-inline-item">
                        <button type="submit" class="btn btn-primary">作成</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</main>
@endsection