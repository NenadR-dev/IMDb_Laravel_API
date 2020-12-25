<?php

namespace App\Services;

use App\Interfaces\CommentServiceInterface;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentService implements CommentServiceInterface
{
    public function addComment($data)
    {
        return Comment::create([
            'comment_text' => $data['comment'],
            'movie_id' => $data['movieId'],
            'user_id' => Auth::user()->id
        ]);
    }
    public function getComments($id, $paginateBy)
    {
        return Comment::where('movie_id',$id)->paginate($paginateBy != null ? $paginateBy : 10);
    }
}