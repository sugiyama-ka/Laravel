<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\User;
use App\Book;
use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id', 'asc')->get();
        return view('comments.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param int $book_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(int $book_id)
    {
        $users = User::all();
        return view('comments.create', compact('users', 'book_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request, int $book_id)
    {
        Comment::create
        ([
            'book_id' => $book_id,
            'user_id' => $request->user,
            'message' => $request->message,
        ]);
        return redirect('comments/index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

