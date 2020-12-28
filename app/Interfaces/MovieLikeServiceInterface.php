<?php

namespace App\Interfaces;

use App\Models\Movie;

interface MovieLikeServiceInterface
{
    public function addMovieLike($data);
    public function getLikes($id);
    public function removeMovieLike($id);
}