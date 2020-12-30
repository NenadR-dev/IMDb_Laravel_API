<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
class Movie extends Model
{
    use HasFactory, Searchable;

    public function Watched()
    {
        return $this->belongsToMany(User::class, 'watch_list')->withPivot('watched');
    }

    public function Watchlist()
    {
        return $this->hasMany(WatchList::class, 'movie_id');
    }

    public function Comments()
    {
        return $this->hasMany(Comment::class, 'movie_id');
    }

    public function Users()
    {
        return $this->belongsToMany(User::class, 'user_movie')->withPivot(['liked', 'disliked']);
    }

    public function Likes()
    {
        return $this->hasMany(UserMovie::class, 'movie_id');
    }

    public function searchableAs()
    {
        return 'movies_index';
    }

    protected $fillable = [
        'title',
        'description',
        'imageCover',
        'genre',
        'visited'
    ];
}
