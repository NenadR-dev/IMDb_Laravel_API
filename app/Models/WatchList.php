<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class WatchList extends Pivot
{
    public $table='watch_list';
    use HasFactory;
}
