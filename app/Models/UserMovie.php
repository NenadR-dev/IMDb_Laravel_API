<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class UserMovie extends Pivot
{
    public $table = "user_movie";
    use HasFactory;
}
