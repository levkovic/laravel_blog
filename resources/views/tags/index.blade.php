@extends('main')

@section('title', '| All Tags')

@section('content')

	<div class="row">

		<div class="col-md-8">
			<h1>Tags</h1>
			<table class='table'>
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach($tags as $tag)
						<tr>
							<td>{{$tag->id}}</td>
							<td><a href="{{ route('tags.show', $tag->id) }}"> {{$tag->name}}</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		
		<div class="col-md-4">
			<div class="well">

			<!-- 'tags.store' named route connected with TagController's stor method -->
				{!! Form::open(['route' => 'tags.store']) !!}
					
					<h2>New Tag</h2>

					{{ Form::label('name', 'Name:') }}
					<!-- second parametr is default value for text field, laravel grab it from the database if first patametr mutches with column name -->
					{{ Form::text('name', null, ['class' => 'form-control']) }}

					{{ Form::submit('Create New Tag', ['class' => 'btn btn-primary btn-block btn-h1-spacing']) }}

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection