<?php

namespace App\Services;

use App\Interfaces\WatchlistInterface;
use Illuminate\Support\Facades\Auth;

class WatchlistService implements WatchlistInterface
{
    public function updateWatchlist($id,$watchlist)
    {   
        $user = Auth::user();
        $user->Watched()->syncWithoutDetaching([$id => ['watched' => $watchlist['watched']]]);
        return $user->Watched()->where('movie_id',$id)->get();
    }
    public function addToWatchlist($watchlist)
    {
        $user = Auth::user();
        $user->Watched()->attach([$watchlist['movieId'] => ['watched' => $watchlist['watched']]]);
        return $user->Watched()->find($watchlist['movieId'])->only('pivot');
    }
    public function deleteFromWatchlist($id)
    {
        $user = Auth::user();
        $user->Watched()->detach($id);
        return $user->Watched()->first();
    }
}