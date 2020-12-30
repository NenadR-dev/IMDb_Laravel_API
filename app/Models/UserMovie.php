<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Laravel\Scout\Searchable;

class UserMovie extends Pivot
{
    public $table = "user_movie";
    use HasFactory, Searchable;
    public function searchableAs()
    {
        return 'usermovies_index';
    }
}
