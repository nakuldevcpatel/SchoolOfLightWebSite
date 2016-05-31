@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Categories</h1>
</div>

<div class="content">
	<div class="pure-g">
		<div class="pure-u-1">
			<h3 class="content-subhead">Create new category</h3>
				{{ Form::open(array('route' => ['admin.categories.update', $category->id], 'class' => 'pure-form pure-form-aligned')) }}
					<fieldset>
						<div class="pure-control-group">
							{{ Form::label('Name', null) }}
							{{ Form::text('name', $category->name, array('placeholder' => 'Name')) }}
						</div>
						<button type="submit" class="pure-button pure-button-primary">Update</button>
					</fieldset>
			
					{{ Form::close() }}
		</div>	
	</div>


@stop
