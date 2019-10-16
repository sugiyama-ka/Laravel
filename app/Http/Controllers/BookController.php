<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

/*
Controller の説明

リクエストを受け取ったときの処理をアクションとして定義する。

アクションに何を書く？ 例えば...
    どのテーブルのデータを使うか？
    どのテーブルにデータを格納するか？
    どの画面へ移動させるか？


今回は BookController なので書籍テーブルに対する操作をまとめている。
アクションは...
    ・index      一覧画面表示処理
    ・create     新規画面表示処理
    ・store      保存処理
    ・show       詳細画面表示処理
    ・edit       編集画面表示処理
    ・update     更新処理
    ・destroy    削除処理
の７つ。

ルーティング表
+-----------+-------------------+---------------------------------------------+
| Method    | URI               | Action                                      |
+-----------+-------------------+---------------------------------------------+
| GET       | books             | App\Http\Controllers\BookController@index   |
| POST      | books             | App\Http\Controllers\BookController@store   |
| GET       | books/create      | App\Http\Controllers\BookController@create  |
| GET       | books/{book}      | App\Http\Controllers\BookController@show    |
| PUT|PATCH | books/{book}      | App\Http\Controllers\BookController@update  |
| DELETE    | books/{book}      | App\Http\Controllers\BookController@destroy |
| GET       | books/{book}/edit | App\Http\Controllers\BookController@edit    |
+-----------+-------------------+---------------------------------------------+
*/

class BookController extends Controller
{
    // 一覧画面表示処理
    public function index()
    {
        // Book::all() は books テーブルのすべての行を取得する。
        // 取得したデータを $books に格納する。
        $books = Book::all();

        // view() でビューを呼び出す。
        // 第１引数で表示するビューを指定する。
        // books.index なので resources/views/books/index.blade.html.php を意味する。
        // 第２引数でビューに渡す変数を指定する。
        // ビュー内で $books とすることで $books を呼び出せる。
        return view('books.index', ['books' => $books]);
    }

    // 新規画面表示処理
    public function create()
    {
        // ビューを呼び出す。
        return view('books.create');
    }

    // 保存処理
    public function store(Request $request)
    {
        // 画面で入力した内容の検証を行う。
        // required は入力必須を意味する。
        // 'titile' => 'required' は title に文字が入力されていればOKだが
        // 入力されていなければエラーにする。
        $request->validate([
            'title' => 'required',
            'publisher' => 'required',
            'price' => 'required',
            'overview' => 'required'
        ]);

        // Book をインスタンス化する。
        $book = new Book;

        // Book インスタンスに画面で入力した値(titleなど)を設定する。
        // 冗長に書くとこうなる。
        //   $book->title = $request->title;
        //   $book->publisher = $request->publisher;
        //   $book->price = $request->price;
        //   $book->overview = $request->overview;
        $book->fill($request->all());

        // データベースに保存する。
        // SQLとしてCREATE文が発行される。
        // この処理が終了した時点で books テーブルに新たなレコードが作成される。
        // $book->id にレコードのIDが設定される。
        $book->save();

        // リダイレクト
        // 引数のURLにGETリクエストを送信する。
        // つまりここで画面の表示は行わない。
        // GET books/{id} となるのでルーティング表の上から４つめにリクエストを送信する。
        return redirect('books/'.$book->id);
    }

    // 詳細画面表示処理
    //
    // ルーティング表の上から４るめを参照すると books/{book} となっている。
    // {book} にはbooksテーブルのIDが入る想定。
    // books/1 でリクエスト送信すると
    // Book::find(1) した結果が第１引数の $book に渡される。
    public function show(Book $book)
    {
        // ビューを呼び出す。
        return view('books.show', ['book' => $book]);
    }

    // 編集画面表示処理
    public function edit(Book $book)
    {
        // ビューを呼び出す。
        return view('books.edit', ['book' => $book]);
    }

    // 更新処理
    public function update(Request $request, Book $book)
    {
        // 画面で入力した内容の検証を行う。
        $request->validate([
            'title' => 'required',
            'publisher' => 'required',
            'price' => 'required',
            'overview' => 'required'
        ]);

        // $book に画面で入力した値を設定した後、データベースのレコードを更新する。
        // SQLとしてUPDATE文が発行される。
        // この処理が終了した時点で books テーブルには該当するレコードのカラムが更新される。
        // 冗長に書くとこうなる。
        //   $book->title = $request->title;
        //   $book->publisher = $request->publisher;
        //   $book->price = $request->price;
        //   $book->overview = $request->overview;
        //   $book->save();
        $book->update($request->all());

        // リダイレクト
        return redirect('books/'.$book->id);
    }

    public function destroy(Book $book)
    {
        // $book をデータベースから削除する。
        // SQLとしてDELETE文が発行される。
        // この処理が終了した時点で books テーブルから該当するレコードが削除される。
        $book->delete();

        // リダイレクト
        return redirect('books');
    }
}