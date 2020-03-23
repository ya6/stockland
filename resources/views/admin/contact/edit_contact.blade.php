@extends('admin.admin')

@section('title', 'Ramonak | edit contact')

@section('section_title', 'Edit contact')
@section('section_content')

<form class="needs-validation" method="post" action='/admin/contact/{{ $contact->id }}'>
@csrf
@method('PATCH')

<div class="input-group mb-3 col-md-6">
  <div class="input-group-prepend">
    <span class="input-group-text" > Adress </span>
  </div>
  <input type="text" class="form-control" value= "{{$contact->adress}}"  name="adress"  >
</div>

<div class="input-group mb-3 col-md-6">
  <div class="input-group-prepend">
    <span class="input-group-text" > Phone </span>
  </div>
  <input type="text" class="form-control" value= "{{$contact->phone}}"  name="phone"  >
</div>

<div class="input-group mb-3 col-md-6">
  <div class="input-group-prepend">
    <span class="input-group-text" > Email </span>
  </div>
  <input type="text" class="form-control" value= "{{$contact->email}}"   name="email">
</div>

<br>
  <br>
  <button  class="btn btn-primary btn-lg bt n-block" type="submit">Save adress</button>
</form>



@endsection