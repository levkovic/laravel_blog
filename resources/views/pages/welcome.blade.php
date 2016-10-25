@extends('main')

@section('content')
<div calss="row">
  <div class="col-md-12">
    <div class="jumbotron">
          <h1>Welcome to My Blog!</h1>
          <p class="lead">Thank you for visiting.</p>
          <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
    </div>
  </div>
  </div>

  <div class="row">
  <div class="col-md-8">

  @foreach($posts as $post)

    <div class="post">
      <h3>{{ $post->title }}</h3>
      <p>{{ substr($post->body, 0, 250) }}{{ strlen($post->body) > 10 ? '...' : '' }}</p>
      <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-primary">Read More</a>
    </div>

    <hr>
  @endforeach
   
  </div>
  <div class="col-md-3 col-md-offset-1">
    <h2>Sidebar</h2>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="text-center">
      {!! $posts->links() !!}
    </div>
  </div>
</div>

@endsection