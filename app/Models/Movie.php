<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

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
        return $this->belongsToMany(User::class, 'user_movie')->withPivot('liked');
    }

    public function Likes()
    {
        return $this->hasMany(UserMovie::class, 'movie_id');
    }

    protected $fillable = [
        'title',
        'description',
        'imageCover',
        'genre',
        'visited'
    ];
}
