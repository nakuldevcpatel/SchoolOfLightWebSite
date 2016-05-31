@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>Applications</h1>
</div>

<div class="content">
	<h3 class="content-subhead">Applications List</h3>
	<div class="pure-g">
		<div class="pure-u-1 grids-unit-bar">
		@if(count($applications))
			<table class="pure-table pure-table-horizontal" id="applications">
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Position</th>
					<th>View</th>
				</thead>
				<tbody>
					@foreach($applications as $application)
					<tr>
						<td>{{$application->name}}</td>
						<td>{{$application->email}}</td>
						<td>{{ $application->phone }}</td>
						<td>
							@if(is_object($application->posting))
								{{ $application->posting->title }}
							@endif
						</td>
						<td><a href="{{ URL::route('admin.applications.show', $application->id) }}">View Application</a></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No applications have been added yet
		@endif
		</div>
	</div>

{{useDataTables('applications')}}
@stop
