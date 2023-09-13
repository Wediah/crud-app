@extends('teachers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Student</div>
  <div class="card-body">
       
      <form action="{{ url('student/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$teachers->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" value="{{$teachers->password}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop