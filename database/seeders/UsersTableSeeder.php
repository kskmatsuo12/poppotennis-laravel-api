<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class UsersTableSeeder extends Seeder
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
                'name' => 'ポッポテニスくん',
                'email' => 'poppotennis@test.com',
                'password' => Hash::make('password')
            ],
        ];
        DB::table('users')->insert($data);
    }
}
