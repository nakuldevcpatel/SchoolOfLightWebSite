@extends('admin.layouts.master')

@section('content')


<div class="header">
  <h1><a href="{{ URL::route('admin.applications.index') }}">Back to Applications</a></h1>
</div>

<div class="content">
  <h3 class="content-subhead">Application</h3>
  <div class="pure-g">
    <div class="pure-u-1 grids-unit-bar">
      <p>Name : {{ $application->name }}</p>
      <p>Phone : {{ $application->phone }}</p>
      <p>Email : {{ $application->email }}</p>
      <p>Description : {{ $application->description }}</p>
      @if(is_object($application->posting))
        <p>Posting : {{ $application->posting->title }}</p>
      @endif
      <p>CV : <a href="{{ $application->cv }}">Download CV</a></p>
      <p>Experience : {{ $application->experience }}</p>
      <p>Location : {{ $application->location }}</p>
      <p>Salary : {{ $application->salary }}</p>
      <p>Industry : {{ $application->industry }}</p>
      <p>Education : {{ $application->education }}</p>
      <p>Functional Area : {{ $application->functional_area }}</p>
    </div>
  </div>

{{useDataTables('applications')}}
@stop
