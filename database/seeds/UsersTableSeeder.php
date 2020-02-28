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
        User::create([
            'name'              => 'Admin User',
            'email'             => 'admin@unc.com.br',
            'password'          => Hash::make('1234'),
        ]);


        User::create([
            'name'              => 'User Test',
            'email'             => 'user@user.com',
            'password'          => Hash::make('1234'),
        ]);

    }
}
