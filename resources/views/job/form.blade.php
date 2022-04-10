@extends('layout')
@section('title',isset($job) ? 'update' .$job->name.$job->age.$job->salary : 'Create')
@section('content')
<a href="{{route('jobs.index')}}">Back to account</a>
<form  method="POST" 
@if(isset($job))
action="{{route('jobs.update',$job)}}"
@else
action="{{route('jobs.store')}}">
@endif
@csrf
@isset($job)
@method('PUT')
@endisset
<div>
  <label>Name</label>
  <input value="{{isset($job) ? $job->name : null}}"  type="text" name="name" >
@error('name')
    <div>{{ $message }}</div>
@enderror
</div>
<div>
  <label>Age</label>
  <input value="{{isset($job) ? $job->age : null}}"  type="number" name="age" >
@error('age')
    <div>{{ $message }}</div>
@enderror
</div>
<div>
  <label>Salary</label>
  <input value="{{isset($job) ? $job->salary : null}}"  type="number" name="salary" >
@error('salary')
    <div>{{ $message }}</div>
@enderror
</div>
  <div>
  <button type="submit">Create</button>
  </div>
  </form>
@endsection