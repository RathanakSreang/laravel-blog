<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentsController extends Controller
{
  public function store(Post $post)
  {
    $post->addComment(request('body'));

    return back();
  }
}
