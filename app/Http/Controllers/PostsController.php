<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
  public function index()
  {
    return view('posts.index');
  }

  public function create()
  {
    return view('posts.create');
  }
  public function store()
  {
    // create the new post
    // 1
    // $post = new \App\Post;
    // $post->title = request('title');
    // $post->body = request('body');
    // $post->save();

    // 2
    Post::create([
      'title' => request('title'),
      'body' => request('body')
    ]);

    return redirect('/');
  }
}
