@extends('layout.application')

@section('content')
  <h1>Create Post</h1>
  <hr>
  <form method="POST" action="/posts">
    {{ csrf_field() }}
    <ul>
      @foreach ($errors->all() as $error)
        {{-- expr --}}
        <li>{{$error}}</li>
      @endforeach
    </ul>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control-plaintext" name="title">
      </div>
    </div>
    <div class="form-group row">
      <label for="" class="col-sm-2 col-form-label">Body</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="body">
      </div>
    </div>
    <button type="submit">Submit</button>
  </form>
@endsection
