<?php

namespace App\Services;

use App\Models\Movie;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\MovieServiceInterface;

class MovieService implements MovieServiceInterface
{
    public function incrementVisitedCount($movie)
    {
        $movie->update(['visited' => $movie->visited + 1]);
        return $movie->with('watchlist')->where('id',$movie->id)->first();
    }

    public function filterMovies($filterBy, $filter, $paginateBy)
    {
        if($filter == null || $filter == 'all')
        {
            return Movie::with('likes','watchlist')->paginate($paginateBy != null ? $paginateBy : 6);
        }
        return Movie::with('likes')->where($filterBy, $filter)->paginate($paginateBy != null ? $paginateBy : 6);
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