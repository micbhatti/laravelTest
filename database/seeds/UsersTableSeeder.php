<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'type'  => 'admin'
        ]);
        DB::table('users')->insert([
            'name' => 'username',
            'email' => 'username@username.com',
            'password' => bcrypt('username'),
            'type'  => 'default'
        ]);
    }
}
