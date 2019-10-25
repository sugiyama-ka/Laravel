<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForienkeyOptionToCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {

            $table->dropForeign('comments_book_id_foreign');
            $table->dropForeign('comments_user_id_foreign');

            $table->foreign('book_id')
                ->references('id')->on('books')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comments', function (Blueprint $table) {

            $table->dropForeign('comments_book_id_foreign');
            $table->dropForeign('comments_user_id_foreign');

            $table->foreign('book_id')
                ->references('id')->on('books');
            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }
}


