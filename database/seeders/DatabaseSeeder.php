<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;

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
            'name' => ' Nenad Radulovic',
            'email' => 'nenad@gmail.com',
            'password' => Hash::make('nenad12345'),
            'email_verified_at' => now(),
        ]);
    }
}
