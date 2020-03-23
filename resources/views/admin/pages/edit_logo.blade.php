@extends('admin.admin')

@section('title', 'Ramonak | Edit logo')

@section('section_title', 'Edit logo')

@section('section_content')
<h5>Current logo</h2>
<hr>
<img src=" {{ asset('assets/img')  . '/' . $logo->logo }} " alt="logo" width="{{ $logo->width}}"></a>
<h5>{{ $logo->logo}}</h5> 
<hr>
<form class="needs-validation" method="post" action=' /admin/logo/{{ $logo->id }}' enctype="multipart/form-data">
@csrf
@method('PATCH')
<h5>Change logo</h2>

<div class="form-group col-md-4   mx-0 px-0">
    <label for="exampleInputEmail1">width,  px</label>
    <input type="text" class="form-control " id=""  value="{{ $logo->width}}" name="width">
  </div>

<div class="custom-file col-md-4 ">
   
 
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="logofile" >
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
  </div>
  <br>
  <br>
  <button  class="btn btn-primary btn-lg" type="submit">Save new logo</button>
</form>
<script>
 //YA
  $fileinput =  document.querySelector('#validatedCustomFile');
  $lableinput =  document.querySelector('.custom-file-label');
  $fileinput.addEventListener('change',function(){
  $lableinput.textContent = $fileinput.files[0].name;
  })

</script>
@endsection

