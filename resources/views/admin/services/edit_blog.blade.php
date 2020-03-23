
@extends('admin.admin')

@section('title', 'Ramonak | edit blog')

@section('section_title', 'Edit blog')

@section('section_content')

<!--Service- -Blog- -->
<section id="service">
    <div class="container">
        
        <div class="service_wrapper">
            <div class="row">
               

                <div class="col-lg-4">
                    <div class="service_block">
                        <div class="delay-03s animated wow  zoomIn">

                            <span><img src="{{ asset('assets/img').'/'.$blog->icon }}" width="120" alt="icon" /></span> </div>
                        <h3 class="animated fadeInUp wow">{{ $blog->name }}</h3>
                        <p class="animated fadeInDown wow">{{ $blog->text }}</p>
                    </div>
                   
                    
                </div>

              
            </div>
            <!-- </div> row -->


        </div>

    </div>
    </div>
</section>
<!--/Service -Blog- -->



<hr>
<div class="container">
<form class="needs-validation" method="post" action='/admin/pages/services/{{ $blog->id }}' enctype="multipart/form-data">
@csrf
@method('PATCH')
<h5>Change blog</h2>

<p class="mb-0">Main icon</p>
  <div class="custom-file col-md-4 ">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="icon" >
    <label class="custom-file-label file" for="validatedCustomFile2">Choose file...</label>
    <div class="invalid-feedback">Example invalid custom file feedback</div>
</div>

<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">Name</label>
    <input type="text" class="form-control" value="{{$blog->name}}" name="name">
  </div>

<div class="form-group">
    <label  class=" mb-0 pb-0"for="exampleFormControlInput1">alias (english word)</label>
    <input type="text" class="form-control" value="{{$blog->alias}}" name="alias">
  </div>


  <!-- CKEDITOR textarea -->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Text</label>
    <textarea class="form-control" id="editor" rows="3" name="text">{{$blog->text}}</textarea>
  </div>

  <br>
  
  <br>
  <br>
  <button  class="btn btn-primary btn-lg bt n-block" type="submit">Update Blog</button>
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


