@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Content</h1>
</div>

<div class="content">
	<h3 class="content-subhead">Edit Content</h3>
	<div class="pure-g">
		<div class="pure-u-1">
			{{ Form::open(array('route' => ['admin.contents.update', $content->id ], 'class' => 'pure-form pure-form-aligned','files' => true)) }}
				<fieldset>

					<div class="pure-control-group">
						{{ Form::label('Name', null) }}
						{{ Form::text('name', $content->name, array('placeholder' => 'Name')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Title', null) }}
						{{ Form::text('title', $content->title, array('placeholder' => 'Title')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('slug', null) }}
						{{ Form::text('slug', $content->slug, array('placeholder' => 'Slug')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Header 1', null) }}
						{{ Form::textarea('header1', $content->header1, array('placeholder' => 'Header 1')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Header 2', null) }}
						{{ Form::textarea('header2', $content->header2, array('placeholder' => 'Header 2')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Header image', null) }}
						{{ Form::file('header_img', null, array('placeholder' => 'Header Image')) }}
					</div>
					<div class="pure-control-group">
						{{ Form::label(' ') }}
					  <img src="{{URL::asset($content->header_img)}}" class="admin_images" alt="Current Header Image" title="Current Header Image">
					</div>
					

					<div class="pure-control-group">
						{{ Form::label('Icon', null) }}
						{{ Form::file('icon_img', null, array('placeholder' => 'Icon')) }}
					</div>
					<div class="pure-control-group">
						{{ Form::label(' ') }}
					  <img src="{{URL::asset($content->icon_img)}}" class="admin_images" alt="Current Icon" title="Current Icon">
					</div>

					<div class="pure-control-group" style="width:80%">
						{{ Form::label('Content', null) }}
						{{ Form::textarea('content', $content->content, array('placeholder' => 'Content' , 'id' => 'html_content')) }}
					</div>

					

					<button type="submit" class="pure-button pure-button-primary">Submit</button>

				</fieldset>

				{{ Form::close() }}
			</div>
	</div>

	<script>
		 CKEDITOR.replace( 'html_content' );
	</script>

@stop
