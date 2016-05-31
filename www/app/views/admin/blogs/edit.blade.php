@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Blogs</h1>
</div>

<div class="content">
	<h3 class="content-subhead">Edit Blog</h3>
	<div class="pure-g">
		<div class="pure-u-1">
			{{ Form::open(array('route' => ['admin.blogs.update', $blog->id], 'class' => 'pure-form pure-form-aligned','files' => true)) }}
				<fieldset>
					<div class="pure-control-group">
						{{ Form::label('Category', null) }}
						{{ Form::select('category_id', ['-1' => 'Select a category'] + $categories, $blog->category_id, array('placeholder' => 'Category ID')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Title', null) }}
						{{ Form::text('title', $blog->title, array('placeholder' => 'Title')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Excerpt', null) }}
						{{ Form::textarea('content', $blog->excerpt, array('placeholder' => 'Excerpt')) }}
					</div>

					<div class="pure-control-group">
						<script src="//cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>
						{{ Form::label('content', null) }}
						{{ Form::textarea('content', $blog->content, array('placeholder' => 'Body')) }}
						<script>
							CKEDITOR.replace( 'content' );
						</script>
					</div>

					<div class="pure-control-group">
						{{ Form::label('') }}
					  <img src="{{URL::asset($blog->featured_img)}}" class="admin_images" alt="">
					</div>

					<div class="pure-control-group">
						{{ Form::label('Featured image', null) }}
						{{ Form::file('featured_img', null, array('placeholder' => 'Featured')) }}
					</div>


					<button type="submit" class="pure-button pure-button-primary">Submit</button>

				</fieldset>

				{{ Form::close() }}
			</div>
	</div>
@stop
