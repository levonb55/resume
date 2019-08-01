<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Jack',
            'last_name' => 'Owen',
            'email' => 'jack@gmail.com',
            'address' => 'New York',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'first_name' => 'Michael',
            'last_name' => 'Walker',
            'email' => 'michael@gmail.com',
            'address' => 'London',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'first_name' => 'Harry',
            'last_name' => 'Morgan',
            'email' => 'harry@gmail.com',
            'address' => 'Los Angeles',
            'password' => bcrypt('12345678'),
        ]);
    }
}
