<?php

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
        App\User::create([
            'name' => 'root',
            'email' => 'sergio100br@hotmail.com',
            'password' => bcrypt('123')
        ]);
    }
}
