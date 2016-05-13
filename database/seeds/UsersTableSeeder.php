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
        \DB::table('users')->insert([
            'name' => 'Helpdesk Admin',
            'email' => 'admin@optimuse-solutions.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
