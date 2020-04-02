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
                'name'              => 'Áxel Kovacki',
                'cpf'             => '000.000.000-00',
                'course'             => 'ENGENHARIA DE SOFTWARE',
                'password'          => Hash::make('00000000000')
            ]
        ]);
    }
}
