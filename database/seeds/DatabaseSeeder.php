<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'               => '03545670555',
            'name'              => 'Camila',
            'phone'             => '91982727368',
            'birth'             => '1997-06-03', 
            'gender'            => 'F',
            'email'             => 'camila@hotmail.com',
            'password'          => env('PASSWORD_HASH') ? bcrypt('123456') : '123456'//para criptografar a senha
        ]);

        // $this->call(UserSeeder::class);
    }
}
