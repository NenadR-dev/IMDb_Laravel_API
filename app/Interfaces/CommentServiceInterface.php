<?php

namespace App\Interfaces;

use App\Models\Movie;

interface CommentServiceInterface
{
    public function addComment($data);
    public function getComments($id, $paginateBy);
}