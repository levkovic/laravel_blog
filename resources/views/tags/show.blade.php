@extends('main')

@section('title', "| $tag->name Tag")

@section('content')
	
	<div class="row">

		<div class="col-md-8">
			<!-- posts() - Tag belongs to many posts. Many to many relationship -->
			<h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
		</div>
	
		<!-- EDIT BUTTON -->
		<div class="col-md-2">
			<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-edit-spacing btn-primary btn-block">Edit</a>
		</div>

		<!-- DELETE BUTTON -->
		<div class="col-md-2">

			{{ Form::open(['route' => ['tags.destroy', $tag->id] , 'method' => 'DELETE']) }}
			{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-edit-spacing']) }}

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<table class="table">

				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Tags</th>
						<th></th>
					</tr>
				</thead>

				<tbody>

					<!-- Run through the all posts that has this $tag -->
					@foreach($tag->posts as $post)
						<tr>
							<th>{{ $post->id }}</th>
							<td>{{ $post->title }}</td>
							<td>

								<!-- Run through the all tags that current $post has -->
								@foreach($post->tags as $tag)
									<span class="label label-default">{{$tag->name}}</span>
								@endforeach
							</td>
							<td>
								<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-xs">View</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>

		</div>

	</div>

@endsection