@extends('layouts.app')

@section('content')
    <main class="container py-3">
        @include('layouts.alert', ['errors' => $errors])
        <div class="row">
        <div class="col-sm">
            <form action="http://localhost/users" method="post">
                <input type="hidden" name="_token" value="mhHCzSBrO4sEgiYFpeCsm9Ytfk9MGrDmvUuweScH">
                <input type="hidden" name="_method" value="POST">

                <div class="form-group">
                    <label for="name">氏名</label>
                    <input type="text" class="form-control " id="name" name="name" value="">
                </div>

                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="http://localhost/users" class="btn btn-secondary">キャンセル</a>
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
