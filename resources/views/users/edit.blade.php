@extends('layouts.app')

@section('content')

    <main class="container py-3">
        <div class="row">
            <div class="col-sm">
                <form action=" {{ url('users/'.$user->id) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('layouts.alert', ['errors' => $errors])

                    <div class="form-group">
                        <label for="name">氏名</label>
                        <input type="text" class="form-control " id="name" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            @if($isicon === "")
                                <img src="{{ asset('/img/no-image.jpg') }}" class="img-fluid rounded-circle"
                                     style="width: 100px; height: 100px;">
                            @else
                                <img src="{{ asset('/storage/img/'.$user->icon) }}" class="img-fluid rounded-circle"
                                     style="width: 100px; height: 100px;">
                            @endif
                        </div>
                        <div class="col-md-9">
                            <label for="name">アイコン画像</label><br>
                            <input type="file" name="icon"/>
                        </div>
                    </div>

                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ url('users') }}" class="btn btn-secondary">キャンセル</a>
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

