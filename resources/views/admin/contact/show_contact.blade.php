@extends('admin.admin')

@section('title', 'Ramonak | show contact')

@section('section_title', 'Show contact')
@section('section_content')

<div class="input-group mb-3 col-md-6">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> Adress </span>
  </div>
  <input type="text" class="form-control" value= "{{$contact->adress}}" disabled >
</div>

<div class="input-group mb-3 col-md-6">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> Phone </span>
  </div>
  <input type="text" class="form-control" value= "{{$contact->phone}}" disabled >
</div>

<div class="input-group mb-3 col-md-6">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"> Email </span>
  </div>
  <input type="text" class="form-control" value= "{{$contact->email}}" disabled >
</div>

<br> 

<div class="row">
    </div  class="col-md-6">
        <a href="/admin/contact/{{ $contact->id }}/edit" class="btn btn-primary w-25">edit</a>
    </div>
</div>




@endsection