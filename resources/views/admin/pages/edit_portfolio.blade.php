@extends('admin.admin')

@section('title', 'Ramonak | edit portfolio')

@section('section_title', 'Edit portfolio')

@section('section_content')



<h1>{{ $page->name }}</h1>


<hr>

<form class="needs-validation" method="post" action='/admin/pages/{{ $page->id }}' enctype="multipart/form-data">
@csrf
@method('PATCH')
<h5>Change portfolio section name</h2>

<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" value="{{$page->name}}" name="name">
  </div>


  <br>
  <br>
  <button  class="btn btn-primary btn-lg bt n-block" type="submit">Save new portfolio</button>
</form>



@endsection

