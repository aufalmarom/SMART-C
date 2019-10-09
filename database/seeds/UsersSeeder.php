<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        [
            'name' => 'Administrator',
            'email' => 'admin@smart-c.undip.ac.id',
            'password' => Hash::make('adminjaya123'),
            'role' => 'administrator',
            'created_at' => now(),
            'updated_at' => now(),
        ],[
            'name' => 'Operator',
            'email' => 'operator@smart-c.undip.ac.id',
            'password' => Hash::make('operatorjaya123'),
            'role' => 'administrator',
            'created_at' => now(),
            'updated_at' => now(),
        ]
        ]);
    }
}
