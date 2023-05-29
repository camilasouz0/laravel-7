<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
use Illuminate\Support\Facades\Hash;

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
            'email'             => 'admin@admin.com',
            'password'          => bcrypt('admin')
        ]);

        // $this->call(UserSeeder::class);
    }
}
