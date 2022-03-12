
@extends('student.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ route('login.do') }}" method="POST">
        {!! csrf_field() !!}
        
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{@$students->email}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{@$students->mobile}}" class="form-control"></br>
        <input type="submit" value="login" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
