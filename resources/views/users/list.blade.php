@extends('layouts.app')

@section('content')

    <main class="container py-3">
        <div class="row">
            <div class="col-sm">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="{{ url('users/create') }}" class="btn btn-success">新規</a>
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
                        <th class="text-center">氏名</th>
                    </tr>
                    </thead>
                    @foreach($list as $user)
                        <tbody>
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td><a href=" {{ url('users/'.$user->id) }} ">{{ $user->name }}</a></td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection


