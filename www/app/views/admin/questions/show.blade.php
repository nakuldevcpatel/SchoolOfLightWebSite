@extends('admin.layouts.master')

@section('content')

<div class="header">
	<h1>FAQ's</h1>
</div>

<div class="content">
	<h3 class="content-subhead">{{$question->question}}</h3>
	<div class="pure-g">
		<div class="pure-u-1 grids-unit-bar">
		@if(count($question->answers))
			<table class="pure-table pure-table-horizontal" id="answers">
				<thead>
					<th>Answer</th>
					<th>Created By</th>
					<th>Date Added</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($question->answers as $answer)
					<tr>
						<td>{{$answer->answer}}</td>
						<td>{{$answer->user->username}}</td>
						<td>{{formatDate($answer->created_at)}}</td>
						<td>
							{{ Form::open(['method' => 'DELETE', 'route' => ['admin.answers.delete', $answer->id]]) }}
							{{ Form::submit('Delete', ['class' => 'pure-button']) }}
							{{ Form::close() }}

						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		@else
			No Answers have been added yet
		@endif
		</div>
	</div>

{{useDataTables('answers')}}
@stop
