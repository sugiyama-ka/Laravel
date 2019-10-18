@extends('layouts.app')

@section('content')

<main class="container py-3">
        <div class="row">
        <div class="col-sm">
            <form action=" {{ url('update', $user->id) }} " method="post">
                @csrf

                @include('layouts.alert', ['errors' => $errors])

                <div class="form-group">
                    <label for="name">氏名</label>
                    <input type="text" class="form-control " id="name" name="name" value="{{ $user->name }}">
                </div>

                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="{{ url('list') }}" class="btn btn-secondary" >キャンセル</a>
                    </li>
                    <li class="list-inline-item">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</main>

@endsection