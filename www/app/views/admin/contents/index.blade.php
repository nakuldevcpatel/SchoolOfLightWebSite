@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Content</h1>
</div>

<div class="content">
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="pull-right">
				<a href="{{URL::route('admin.contents.create')}}" class="pure-button pure-button-primary">Add New Content</a>
			</div>
		</div>
	</div>
	<h3 class="content-subhead">Content List</h3>
	<div class="pure-g">
		<div class="pure-u-1 grids-unit-bar">
		@if(count($contents))
			<table class="pure-table pure-table-horizontal" id="contents">
				<thead>
					<th>Name</th>
					<th>Slug</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach($contents as $content)
					<tr>
						<td>{{$content->name}}</td>
						<td>{{$content->slug}}</td>
						<td><a href="{{ URL::route('admin.contents.edit', $content->id)}}" class="pure-button">Edit</a></td>
						<td>
							{{ Form::open(['method' => 'DELETE', 'route' => ['admin.contents.delete', $content->id]]) }}
							{{ Form::submit('Delete', ['class' => 'pure-button']) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No content has been added yet
		@endif
		</div>
	</div>

{{useDataTables('contents')}}
@stop
