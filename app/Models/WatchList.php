<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Laravel\Scout\Searchable;

class WatchList extends Pivot
{
    public $table='watch_list';
    use HasFactory, Searchable;
    public function searchableAs()
    {
        return 'watchlists_index';
    }
}