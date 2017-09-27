<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
  public function index()
  {
    $posts = Post::all();

    return view('posts.index', compact('posts'));
  }

  public function create()
  {
    return view('posts.create');
  }
  public function store()
  {
    $this->validate(request(), [
      'title' => 'required|unique:posts|max:255|min:2',
      'body' => 'required'
    ]);

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

  public function show(Post $post)
  {
    return view('posts.show', compact('post'));
  }
}
