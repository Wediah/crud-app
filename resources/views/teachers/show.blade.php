@extends('teachers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Teachers Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $teacher->name }}</h5>
        <p class="card-text">Email : {{ $teacher->email }}</p>
        <p class="card-text">Password : {{ $teacher->password }}</p>
  </div>
    </hr>
  </div>
</div>