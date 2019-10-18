<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserNewRequest;
use App\Http\Requests\UpdateUserRequest;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function create()
    {

        return view('users.create');
    }

    public function store(User $user, UserNewRequest $request)
    {

        $user->fill($request->all())->save();

        return redirect('users');

    }

    public function index()
    {

        $list =  DB::table('users')->get();

        return view('users.list', compact('list'));
    }

    public function show($id)
    {

        $user = DB::table('users')
            ->select('id','name')
            ->where('id', '=', $id)
            ->first();

        return view('users.details', compact('user'));
    }

    public function edit($id)
    {

        $user = DB::table('users')
            ->select('name','id')
            ->where('id', '=', $id)
            ->first();

        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, $id)
    {

        DB::table('users')
            ->where('id', $id)
            ->update(['name' => $request->name]);

        return redirect('users');
    }

    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect('users');

    }
}
