<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'name'      => 'Ezequiel Dhonatan',
            'email'     => 'Ezequieldhonatan@gmail.com',
            'password'  => bcrypt('123456'),
        ]);

        user::create([
            'name'      => 'Salis Silva Souza',
            'email'     => 'Salissilvasouza@gmail.com',
            'password'  => bcrypt('123456'),
        ]);
    }
}
