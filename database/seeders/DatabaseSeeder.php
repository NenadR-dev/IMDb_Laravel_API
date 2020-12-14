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
        Movie::create([
            'title' => 'Lord of the rings trilogy',
            'description' => 'Little hobbits venture on a new adventures',
            'imageCover' => 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg',
            'genre' => 'adventure'
        ]);
        Movie::create([
            'title' => 'Allita Battle Angel',
            'description' => 'Robot fights',
            'imageCover' => 'https://upload.wikimedia.org/wikipedia/en/e/ee/Alita_Battle_Angel_%282019_poster%29.png',
            'genre' => 'action'
        ]);
        Movie::create([
            'title' => 'Harry Potter',
            'description' => 'Wizards fighting their arch nemesis. The one who shall not be named',
            'imageCover' => 'https://m.media-amazon.com/images/M/MV5BMGVmMWNiMDktYjQ0Mi00MWIxLTk0N2UtN2ZlYTdkN2IzNDNlXkEyXkFqcGdeQXVyODE5NzE3OTE@._V1_.jpg',
            'genre' => 'adventure'
        ]);
        Movie::create([
            'title' => 'Saw',
            'description' => 'Mistery murders and stuff. Super scary',
            'imageCover' => 'https://i.ytimg.com/vi/nCqAXtploOg/maxresdefault.jpg',
            'genre' => 'horror'
        ]);
        Movie::create([
            'title' => 'Hobbit',
            'description' => 'An unexpecred journey following our protagonist Bilbo Beggins and the wizard Gandalf the Grey',
            'imageCover' => 'https://m.media-amazon.com/images/M/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_.jpg',
            'genre' => 'adventure'
        ]);
    }
}
