@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Blogs</h1>
</div>

<div class="content">
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="pull-right">
				<a href="{{URL::route('admin.blogs.create')}}" class="pure-button pure-button-primary">Add New Blog</a>
			</div>
		</div>
	</div>
	<h3 class="content-subhead">Blog List</h3>
	<div class="pure-g">
		<div class="pure-u-1 grids-unit-bar">
		@if(count($blogs))
			<table class="pure-table pure-table-horizontal" id="blogs">
				<thead>
					<th>Title</th>
					<th>Date Added</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach($blogs as $blog)
					<tr>
						<td>{{$blog->title}}</td>
						<td>{{formatDate($blog->created_at)}}</td>
						<td><a href="{{ URL::route('admin.blogs.edit', $blog->id)}}" class="pure-button">Edit</a></td>
						<td>
							{{ Form::open(['method' => 'DELETE', 'route' => ['admin.blogs.delete', $blog->id]]) }}
							{{ Form::submit('Delete', ['class' => 'pure-button']) }}
							{{ Form::close() }}

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No blogs have been added yet
		@endif
		</div>
	</div>

{{useDataTables('blogs')}}
@stop
