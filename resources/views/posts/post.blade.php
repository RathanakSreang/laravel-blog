<a href="/posts/{{$post->id}}">
  <h4>{{$post->title}}</h4>
</a>
<i>{{$post->created_at->toFormattedDateString()}}</i>
<p>{{$post->body}}</p>
