@extends('layout.application')

@section('content')
  <h2>{{$post->title}}</h2>
  <p>{{$post->body}}</p>

  <hr>
  @foreach ($post->comments as $comment)
    {{ $comment-> body }}
  @endforeach

  <hr>
  <form method="POST" action="/posts/{{ $post->id }}/comment">
    {{ csrf_field() }}
    <ul>
      @foreach ($errors->all() as $error)
        {{-- expr --}}
        <li>{{$error}}</li>
      @endforeach
    </ul>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Body</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="body" required>
      </div>
    </div>
    <button type="submit">Submit</button>
  </form>
@endsection
