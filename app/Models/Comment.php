<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Comment extends Model
{
    use HasFactory, Searchable;

    public $table='comments';

    protected $fillable = [
        'comment_text',
        'user_id',
        'movie_id'
    ];
    public function searchableAs()
    {
        return 'comments_index';
    }
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
