<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'タイトル１',
                'created_at' => '2022-04-10 00:00:01'
            ],
            [
                'title' => 'タイトル１',
                'created_at' => '2021-04-10 00:00:01'
            ]
        ];
        DB::table('posts')->insert($data);
    }
}
