<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'name'=> 'Lili',
            'last_name'=> 'Juez',
            'email'=> 'lili@gmail.com',
            'user'=> 'lili',
            'password'=> \Hash::make('123456'),
            'type'=> 'admin',
            'active'=> 1,
            'address'=> 'Miguel Bravo 2,bajo',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ],
        [
            'name'=> 'Ian',
            'last_name'=> 'Fuentes',
            'email'=> 'ian@gmail.com',
            'user'=> 'ian',
            'password'=> \Hash::make('123456'),
            'type'=> 'user',
            'active'=> 1,
            'address'=> 'Miguel Bravo 2,2do B',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

        User::insert($data);
    }
}
