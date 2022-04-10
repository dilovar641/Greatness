@extends('layout')
@section('title','Job'.$job->name,$job->age,$job->salary)
@section('content')
<a href="{{route('jobs.index')}}">Back to main</a>
<ul>
<li>id:{{$job->id}}</li>
<li>Name:{{$job->name}}</li>
<li>Age:{{$job->age}}</li>
<li>Salary:{{$job->salary}}</li>

</ul>
<form method="post" action="{{route('jobs.destroy',$job)}}">
<a href="{{route('jobs.edit',$job)}}">Edit</a>
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>

@endsection