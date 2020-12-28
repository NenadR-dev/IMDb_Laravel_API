<?php

namespace App\Interfaces;

use App\Models\Movie;

interface MovieServiceInterface
{
    public function updateMovie($data , Movie $movie);
    public function addMovie($movie);
    public function deleteMovie($movie);
    public function filterMovies($filterBy, $filter, $paginateBy);
    public function incrementVisitedCount($movie);
}