<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'admin',
            'email'    => 'admin@gmail.com',
            'phone' => '9840015777',
            'role_id' => 1,
            'password'   =>  Hash::make('password'),
        ]);
        User::create([
            'name'    => 'donor',
            'email'    => 'donor@gmail.com',
            'phone' => '9840015777',
            'role_id' => 2,
            'password'   =>  Hash::make('password'),
        ]);
    }
}