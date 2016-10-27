@extends('main')

@section('title', "| $post->title")

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>{{ $post->title }}</h1>
			<p>{{ $post->body }}</p>
<<<<<<< HEAD
			<hr>
			
=======
>>>>>>> e2ad823b59a08f7a0b5044aec684178e5d805a3d
		</div>
	</div>

@endsection