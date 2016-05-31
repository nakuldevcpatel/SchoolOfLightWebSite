@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Categories</h1>
</div>

<div class="content">
	<div class="pure-g">
		<div class="pure-u-1">
			<h3 class="content-subhead">Create new category</h3>
				{{ Form::open(array('route' => 'admin.categories.store', 'class' => 'pure-form pure-form-aligned')) }}
					<fieldset>
						<div class="pure-control-group">
							{{ Form::label('Name', null) }}
							{{ Form::text('name', null, array('placeholder' => 'Name')) }}
						</div>
						<button type="submit" class="pure-button pure-button-primary">Create</button>
					</fieldset>
			
					{{ Form::close() }}
		</div>
	</div>
	<h3 class="content-subhead">Categories Lists</h3>
	<div class="pure-g">
		<div class="pure-u-1 grids-unit-bar">
		@if(count($categories))
			<table class="pure-table pure-table-horizontal" id="categories">
				<thead>
					<th>Name</th>
					<th></th>
					<th></th>
				</thead>
				<tbody id="categoryOrder">
					@foreach($categories as $category)
					<tr id="item-{{$category->id}}">
						<td>{{$category->name}}</td>
						<td><a href="{{ URL::route('admin.categories.edit', $category->id)}}" class="pure-button">Edit</a></td>
						<td>
							{{ Form::open(['method' => 'DELETE', 'route' => ['admin.categories.delete', $category->id]]) }}
							{{ Form::submit('Delete', ['class' => 'pure-button']) }}
							{{ Form::close() }}

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No categories have been added yet
		@endif
		</div>
	</div>

{{useDataTables('categories')}}
{{orderTable('categoryOrder',URL::route('categoryOrder.order'))}}

@stop
