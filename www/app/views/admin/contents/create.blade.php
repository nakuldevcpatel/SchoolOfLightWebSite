@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Content</h1>
</div>

<div class="content">
	<h3 class="content-subhead">Create Content</h3>
	<div class="pure-g">
		<div class="pure-u-1">
			{{ Form::open(array('route' => 'admin.contents.store', 'class' => 'pure-form pure-form-aligned','files' => true)) }}
				<fieldset>

					<div class="pure-control-group">
						{{ Form::label('Name', null) }}
						{{ Form::text('name', null, array('placeholder' => 'Name')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Title', null) }}
						{{ Form::text('title', null, array('placeholder' => 'Title')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Slug', null) }}
						{{ Form::textarea('slug', null, array('placeholder' => 'Slug')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Header 1', null) }}
						{{ Form::textarea('header1', null, array('placeholder' => 'Header 1')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Header 2', null) }}
						{{ Form::textarea('header2', null, array('placeholder' => 'Header 2')) }}
					</div>

					<div class="pure-control-group">
						{{ Form::label('Header image', null) }}
						<input type="file" name="header_img">
					</div>

					<div class="pure-control-group">
						{{ Form::label('Icon image', null) }}
						<input type="file" name="icon_img">
					</div>

					<div class="pure-control-group">
						{{ Form::label('Content', null) }}
						{{ Form::textarea('content', null, array('placeholder' => 'Content',  'id' => 'html_content')) }}
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
