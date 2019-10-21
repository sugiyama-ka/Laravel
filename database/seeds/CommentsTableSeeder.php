<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'book_id' => '1',
            'user_id' => '1',
            'message' => '素敵な本です。',
        ]);

    }
}
