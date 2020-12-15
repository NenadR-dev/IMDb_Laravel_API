<?php

namespace App\Services;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;

use App\Interfaces\MovieServiceInterface;

class MovieService implements MovieServiceInterface 
{
    public function updateMovie($data, Movie $movie)
    {
        return $movie->update($data) ? $movie : [];
    }

    public function addMovie($movie)
    {
        return Movie::create($movie);
    }

    public function deleteMovie($movie)
    {
        return $movie->delete() ? $movie : [];
    }
}