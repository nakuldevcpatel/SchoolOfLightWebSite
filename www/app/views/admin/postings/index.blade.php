@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Career Postings</h1>
</div>

<div class="content">
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="pull-right">
				<a href="{{URL::route('admin.postings.create')}}" class="pure-button pure-button-primary">Add New Career Posting</a>
			</div>
		</div>
	</div>
	<h3 class="content-subhead">Career Posting List</h3>
	<div class="pure-g">
		<div class="pure-u-1 grids-unit-bar">
		@if(count($postings))
			<table class="pure-table pure-table-horizontal" id="postings">
				<thead>
					<th>Title</th>
					<th>Company</th>
					<th>Date Added</th>
					<th></th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach($postings as $posting)
					<tr>
						<td>{{$posting->title}}</td>
						<td>{{$posting->company_name}}</td>
						<td>{{formatDate($posting->created_at)}}</td>
						<td><a href="{{ URL::route('admin.postings.edit', $posting->id)}}" class="pure-button">Edit</a></td>
						<td><a href="{{ URL::route('admin.postings.applications', $posting->id)}}" class="pure-button">View Applications</a></td>
						<td>
							{{ Form::open(['method' => 'DELETE', 'route' => ['admin.postings.delete', $posting->id]]) }}
							{{ Form::submit('Delete', ['class' => 'pure-button']) }}
							{{ Form::close() }}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No postings have been added yet
		@endif
		</div>
	</div>

{{useDataTables('postings')}}
@stop
