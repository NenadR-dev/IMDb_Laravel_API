<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $table='comments';

    protected $fillable = [
        'comment_text',
        'user_id',
        'movie_id'
    ];
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
