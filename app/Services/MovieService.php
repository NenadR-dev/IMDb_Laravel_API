<?php

namespace App\Services;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Storage;
use App\Interfaces\MovieServiceInterface;

class MovieService implements MovieServiceInterface
{
    public function filterMovies($filterBy, $filter)
    {
        if($filter == null || $filter == 'all')
        {
            return Movie::with('likes')->paginate(3);
        }
        return Movie::with('likes')->where($filterBy, $filter)->paginate(3);
    }

    public function updateMovie($data, Movie $movie)
    {
        return $movie->update($data) ? $movie : [];
    }

    public function addMovie($movie)
    {
        $path = Storage::disk('public')->put('movies', $movie['imageCover']);
        return Movie::create([
            'title' => $movie['title'],
            'description' => $movie['description'],
            'genre' => $movie['genre'],
            'imageCover' => asset('storage/'.$path)
        ]);
    }

    public function deleteMovie($movie)
    {
        return $movie->delete() ? $movie : [];
    }
}