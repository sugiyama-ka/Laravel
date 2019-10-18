@extends('layouts.app')


@section('content')


    <main class="container py-3">
    <div class="row">
        <div class="col-sm">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="http://localhost/users" class="btn btn-light">戻る</a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ url('edit', $user->id)  }}" class="btn btn-success">編集</a>
                </li>
                <li class="list-inline-item">
                    <form action="{{ url('delete', $user->id) }}" method="get">
                        <input type="hidden" name="_token" value="mhHCzSBrO4sEgiYFpeCsm9Ytfk9MGrDmvUuweScH">
                        <input type="hidden" name="_method" value="DELETE">
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
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <th>氏名</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection