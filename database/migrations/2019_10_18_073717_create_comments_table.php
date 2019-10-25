<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('book_id')->nullable()->comment('書籍ID');
            $table->unsignedInteger('user_id')->nullable()->comment('ユーザーID
');
            $table->string('message')->nullable()->commemnt('メッセージ');
            $table->timestamps();

            $table->foreign('book_id')
                ->references('id')->on('books');
            $table->foreign('user_id')
                ->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}


