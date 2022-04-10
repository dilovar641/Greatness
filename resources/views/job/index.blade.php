@extends('layout')
@section('title','Create Empl')

@section('content')

<a href="{{route('jobs.create')}}">Create Empl</a>
<a>Create</a>
<table>
<thead>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Salary</th>
<th>Actions</th>

</thead>
<tbody>
@foreach($jobs as $job)
<tr>
<td>{{$job->id}}</td>
<td>
<a href="{{route('jobs.show',$job)}}">{{$job->name}}</td>
<td>
<a href="{{route('jobs.show',$job)}}">{{$job->age}}</td>
<td>
<a href="{{route('jobs.show',$job)}}">{{$job->salary}}</td>
<td>
<form method="get" action="{{route('jobs.destroy',$job)}}">
<a href="{{route('jobs.edit',$job)}}">Edit</a>
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>
@endforeach
</tbody>
</table>

@endsection
