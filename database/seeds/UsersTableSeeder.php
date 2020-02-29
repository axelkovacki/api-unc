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
            [
                'name'              => 'Admin User',
                'email'             => 'admin@unc.com.br',
                'password'          => Hash::make('1234')
            ],
            [
                'name'              => 'User Test',
                'email'             => 'user@user.com',
                'password'          => Hash::make('1234')
            ] 
        ]);
    }
}
