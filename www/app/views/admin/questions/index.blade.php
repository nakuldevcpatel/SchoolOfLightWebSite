@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>FAQ's</h1>
</div>

<div class="content">
	<h3 class="content-subhead">Questions Lists</h3>
	<div class="pure-g">
		<div class="pure-u-1 grids-unit-bar">
		@if(count($questions))
			<table class="pure-table pure-table-horizontal" id="questions">
				<thead>
					<th>Question</th>
					<th>Date Added</th>
					<th>Approved</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($questions as $question)
					<tr>
						<td>{{$question->question}}</td>
						<td>{{formatDate($question->created_at)}}</td>
						<td>
							@if($question->pinned)
								<a href="{{ URL::route('admin.questions.unapprove', $question->id) }}" class="pure-button">Approved</a>
							@else
								<a href="{{ URL::route('admin.questions.approve', $question->id) }}" class="pure-button">Pending</a>
							@endif
						</td>
						<td>
							{{ Form::open(['method' => 'DELETE', 'route' => ['admin.questions.delete', $question->id]]) }}
							{{ Form::submit('Delete', ['class' => 'pure-button']) }}
							{{ Form::close() }}

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No Questions have been added yet
		@endif
		</div>
	</div>

{{useDataTables('questions')}}
@stop
