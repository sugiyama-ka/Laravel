<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserNewRequest;
use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    /**
     * @param UserNewRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function store(UserNewRequest $request)
    {

        if($request->icon !== null){
            $path = $request->file('icon')->store('public/img');
        } else {
            $path = "";
        }
        User::create(['icon' => basename($path),
            'name' => $request->name,
        ]);
        return redirect('users');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function index()
    {
        $list = DB::table('users')->get();
        return view('users.list', compact('list'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function show(int $id)
    {
        $user = DB::table('users')
            ->select('id', 'name')
            ->where('id', '=', $id)
            ->first();
        return view('users.details', compact('user'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function edit(int $id)
    {
        $isicon = User::find($id)->icon;
        $user = DB::table('users')
            ->select('name', 'id', 'icon')
            ->where('id', '=', $id)
            ->first();
        return view('users.edit', compact('user', 'isicon'));
    }

    /**
     * @param UpdateUserRequest $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateUserRequest $request, int $id)
    {
        if ($request->icon === null) {
            $icon = User::find($id)->icon;
            DB::table('users')
                ->where('id', $id)
                ->update(['name' => $request->name,
                    'icon' => $icon
                ]);
            return redirect('users');
        } else {
            if ($request->file('icon')->isValid([])) {
                $path = $request->file('icon')->store('public/img');

                DB::table('users')
                    ->where('id', $id)
                    ->update(['name' => $request->name,
                        'icon' => basename($path)
                    ]);
                return redirect('users');
            }
        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(int $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('users');
    }
}

