@extends('admin.admin')

@section('title', 'Ramonak | create portfolio item')

@section('section_title', 'Create portfolio item')

@section('section_content')

<div class="container">
<form class="needs-validation" method="post" action='/admin/portfolio' enctype="multipart/form-data">
@csrf

<h5>create an item</h2>



<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">Category</label>
    <input type="text" class="form-control"  name="category">
  </div>

<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">filter (english word)</label>
    <input type="text" class="form-control"  name="filter">
  </div>

  <div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">name</label>
    <input type="text" class="form-control"  name="name">
  </div>


  <p class="mb-0">Image</p>
  <div class="custom-file col-md-4 ">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" required>
    <label class="custom-file-label file" for="validatedCustomFile2">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>

  <br>
  
  <br>
  <br>
  <button  class="btn btn-primary btn-lg bt n-block mb-3" type="submit">Save new Blog</button>
</form>
</div>
<script>
 

  fileinput =  document.querySelector('#validatedCustomFile');
  lableinput =  document.querySelector('.file');
  fileinput.addEventListener('change',function(){
  lableinput.textContent = fileinput.files[0].name;
  })
  

</script>

@endsection