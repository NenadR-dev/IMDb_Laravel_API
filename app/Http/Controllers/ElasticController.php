<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class ElasticController extends Controller
{
    public function ElasticSearch(Request $request)
    {
        return Movie::search($request->get('query'))->get();
    }
}
