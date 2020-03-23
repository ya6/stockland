@extends('admin.admin')

@section('title', 'Ramonak | edit about')

@section('section_title', 'Edit about')

@section('section_content')


@include('site.about')


<hr>

<form class="needs-validation" method="post" action='/admin/pages/{{ $page->id }}' enctype="multipart/form-data">
@csrf
@method('PATCH')
<h5>Change about</h2>

<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" value="{{$page->name}}" name="name">
  </div>

<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" value="{{$page->title}}" name="title">
  </div>


  <!-- CKEDITOR textarea -->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea class="form-control" id="editor" rows="3" name="text">{{$page->text}}</textarea>
  </div>

  <br>
  <p class="mb-0">Main image</p>
  <div class="custom-file col-md-4 ">
    <input type="file" class="custom-file-input" id="validatedCustomFile2" name="image" >
    <label class="custom-file-label file2" for="validatedCustomFile2">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>
  <br>
  <br>
  <button  class="btn btn-primary btn-lg bt n-block" type="submit">Save new About</button>
</form>
<script>
 

  fileinput2 =  document.querySelector('#validatedCustomFile2');
  lableinput2 =  document.querySelector('.file2');
  fileinput2.addEventListener('change',function(){
  lableinput2.textContent = fileinput2.files[0].name;
  })
  

</script>


@endsection


