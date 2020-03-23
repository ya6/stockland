@extends('admin.admin')

@section('title', 'Ramonak | edit the item')

@section('section_title', 'edit the item')

@section('section_content')

<div class="d-flex">
    <ul class="list-unstyled">

       
        <li class="media my-3 align-items-center">
            <img class=" mt-1 mr-3" src="{{ asset('assets/img/products/' ) . '/' . $portfolio->image }}"
             alt="Portfolio's photo" width="120">
            <div class="media-body ">
                <h5 class="mt-0 mb-1 ">Category: <strong>{{ $portfolio->category }} <strong></h5>
                <h5 class="mt-0 mb-1">filter: <strong>{{ $portfolio->filter    }} <strong></h5>
                <h5 class="mt-0 mb-1">name: {{ $portfolio->name }} </h5>
                <h5 class="mt-0 mb-1">image: {{ $portfolio->image }} </h5>
            </div>
            
        </li>
    
    </ul>
</div>

<hr>

<div class="container">
<form class="needs-validation" method="post" action='/admin/portfolio/{{ $portfolio->id  }}' enctype="multipart/form-data">
@csrf
@method('PATCH')

<h5>Change item</h2>



<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">Category</label>
    <input type="text" class="form-control" value="{{ $portfolio->category }}" name="category">
  </div>

<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">filter (english word)</label>
    <input type="text" class="form-control" value="{{$portfolio->filter }}" name="filter">
  </div>

  <div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">name</label>
    <input type="text" class="form-control" value="{{$portfolio->name }}" name="name">
  </div>


  <p class="mb-0">Image</p>
  <div class="custom-file col-md-4 ">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="image" >
    <label class="custom-file-label file" for="validatedCustomFile2">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>

  <br>
  
  <br>
  <br>
  <button  class="btn btn-primary btn-lg bt n-block mb-3" type="submit">Update the Item</button>
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