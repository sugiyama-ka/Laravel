<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
Model の説明

データベースのテーブルへのアクセスを担う。
テーブルへの取得や保存のルール定義などはここで行う。

モデルがどのテーブルと紐づくかはモデルのクラス名から自動で推測される。
モデルは基本的に単数形の英語とする。
テーブル名はそれを複数形にしたものと紐づく。

Book 場合は複数形 books テーブルとなる。
*/

class Book extends Model
{
    // fillable はモデルからテーブルのどのカラムの変更を許可するかを指定する。
    protected $fillable = ['title', 'publisher', 'price', 'overview'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

