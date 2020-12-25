<?php

namespace App\Interfaces;


interface WatchlistInterface
{
    public function updateWatchlist($id,$watchlist);
    public function addToWatchlist($watchlist);
    public function deleteFromWatchlist($id);
}