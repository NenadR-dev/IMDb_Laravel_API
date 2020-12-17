<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsToMany(User::class, 'user_movie')->withPivot('liked');
    }

    protected $fillable = [
        'title',
        'description',
        'imageCover',
        'genre'
    ];
}
