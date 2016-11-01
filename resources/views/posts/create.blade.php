@extends('main')

@section('title','Create New Post')

@section('stylesheets')
	
	<!-- Include parsley non-serverside validation -->
	{!! Html::style('css/parsley.css') !!}
	<!-- Include slect tags -->
	{!! Html::style('css/select2.min.css') !!}

@endsection

@section('content')

	<div class="row">

		<div class="col-md-8 col-md-offset-2">

			<h1>Create New Post</h1>

			<hr>
			<!-- data-parsley-validate => '' - includes parsley non-serverside validation -->
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}

			{!! Form::label('title', 'Title:') !!}
			<!-- 'required' => '', 'maxlength' => '255' - implementation of parsley validation -->
			{!! Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) !!}

			{{ Form::label('slug', 'Slug') }}
			{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

			{{ Form::label('category_id', 'Category:') }}
			<!-- simple select -->
			<select class="form-control" name="category_id">
				@foreach($categories as $category)
					<option value='{{ $category->id }}'>{{ $category->name }}</option>
				@endforeach
			</select>

			{{ Form::label('Tags', 'Tags:') }}
			<!-- select with select2 -->
			<!-- class='select2-multi' - enables UI for tags -->
			<select class="form-control select2-multi" name="tags[]" multiple="multiple">
				@foreach($tags as $tag)
					<option value='{{ $tag->id }}'>{{ $tag->name }}</option>
				@endforeach
			</select>
			

			{!! Form::label('body', 'Post Body:') !!}
			{!! Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) !!}

			{!! Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block btn-h1-spacing')) !!}
    		
			{!! Form::close() !!}

		</div>

	</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	{!! Html::script('js/select2.min.js') !!}

	
	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>

@endsection