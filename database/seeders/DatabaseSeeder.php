<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\User;
use \App\Models\Movie;

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
        $path = 'http://localhost:8000/storage/';
        Movie::insert([
            [
                'title' => 'Hobbit',
                'description' => 'An unexpecred journey following our protagonist Bilbo Beggins and the wizard Gandalf the Grey',
                'imageCover' => $path.'movies/Hobbit.jpg',
                'genre' => 'adventure'
            ],
            [
                'title' => 'Saw',
                'description' => 'Mistery murders and stuff. Super scary',
                'imageCover' => $path.'movies/Saw.jpg',
                'genre' => 'horror'
            ],
            [
                'title' => 'Harry Potter',
                'description' => 'Wizards fighting their arch nemesis. The one who shall not be named',
                'imageCover' => $path.'movies/HarryPotter.jpg',
                'genre' => 'adventure'
            ],
            [
                'title' => 'Allita Battle Angel',
                'description' => 'Robot fights',
                'imageCover' => $path.'movies/Alita_Battle_Angel_(2019_poster).png',
                'genre' => 'action'
            ],
            [
                'title' => 'Lord of the rings trilogy',
                'description' => 'Little hobbits venture on a new adventures',
                'imageCover' => $path.'movies/LordOfTherRings.jpg',
                'genre' => 'adventure'
            ]
        ]);
    }
}
