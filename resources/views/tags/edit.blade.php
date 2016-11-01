@extends('main')

@section('title', '| Edit Teg')

@section('content')

<!-- model binding of the form -->
	{{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) }}

		{{ Form::label('name', "Title:") }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}

		{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-edit-spacing']) }}

	{{ Form::close() }}

@endsection