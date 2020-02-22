<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'id' => '1',
            'role' => 'Operator'
        ]);
        Role::create([
            'id' => '2',
            'role' => 'Admin'
        ]);
        Role::create([
            'id' => '3',
            'role' => 'Sender'
        ]);
        Role::create([
            'id' => '4',
            'role' => 'Receiver'
        ]);

        User::create([
            'id' => '1',
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'role' => 2
        ]);
        User::create([
            'id' => '2',
            'name' => 'Operator',
            'email' => 'operator@test.com',
            'password' => Hash::make('password'),
            'role' => 1
        ]);
        User::create([
            'id' => '3',
            'name' => 'Sender',
            'email' => 'sender@test.com',
            'password' => Hash::make('password'),
            'role' => 3
        ]);
        User::create([
            'id' => '4',
            'name' => 'Receiver',
            'email' => 'receiver@test.com',
            'password' => Hash::make('password'),
            'role' => 4
        ]);

    }
}
