@extends('students.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Students</div>
  <div class="card-body">
       
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
        </br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror">
        @error('address')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
        </br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror">
        @error('mobile')
            <span class="invalid-feedback" role="alert">
                {{ $message }}
            </span>
        @enderror
        </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop