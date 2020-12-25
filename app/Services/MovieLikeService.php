<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Interfaces\MovieLikeServiceInterface;

class MovieLikeService implements MovieLikeServiceInterface
{
    public function addMovieLike($data)
    {
        $user = Auth::user();
        $user->Movies()->syncWithoutDetaching([$data['movieId'] => ['liked' => $data['liked']]]);
        return $user->Movies()->find($data['movieId'])->only('pivot');
    }

    public function getLikes($id)
    {
        return Auth::user()->Likes()->find($id)->only('liked');
    }

    public function removeMovieLike($id)
    {
        $user = Auth::user();
        $targetMovie = $user->Movies()->find($id)->only('pivot');
        $user->Movies()->detach($id);
        return $targetMovie;
    }
}