<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
              'name' => 'Dmitriy',
              'email' => 'd.porollo@example.ru',
              'password' => bcrypt('secret')
            ],
            [
              'name' => 'Sergey',
              'email' => 's.porollo@example.ru',
              'password' => bcrypt('secret')
            ],
        ]);
    }
}
