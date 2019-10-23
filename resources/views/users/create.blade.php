@extends('layouts.app')

@section('content')
    <main class="container py-3">
        @include('layouts.alert', ['errors' => $errors])
        <div class="row">
            <div class="col-sm">
                <form action="{{ url('users')  }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name">氏名</label>
                        <input type="text" class="form-control " id="name" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="name">アイコン画像</label><br>
                        <input type="file" name="icon" value=""/>
                    </div>

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ url('users') }}" class="btn btn-secondary">キャンセル</a>
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


