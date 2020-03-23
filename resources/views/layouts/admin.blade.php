@extends('layouts.app')



@section('content')

<div class="row">
  <!-- ASIDE -->
  <aside class="col-sm-5 col-md-4  col-lg-3 col-xl-2">
    <ul>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="/admin/logo">Main logo</a>
        </li>

        <li class="nav-item coll">
          <a class="nav-link coll1" href="#" data-toggle="collapse" data-target="#collapse_meny_1">Pages
            <span class=""><i class="fa fa-angle-down"></i></span>
          </a>

          <div class="collapse" id="collapse_meny_1">
            <a href="/admin/pages/1" class="dropdown-item">Herro</a>
            <a href="/admin/pages/2" class="dropdown-item">About</a>


            <a class="nav-link coll1" href="#" data-toggle="collapse" data-target="#collapse_meny_2">Blog
            
            </a>
            <div class="collapse" id="collapse_meny_2">
            <a href="/admin/pages/3" class="dropdown-item"> &#8226 Title</a>
            <a href="/admin/pages/services" class="dropdown-item">  &#8226 Blogs</a>
            </div>

            <a class="nav-link coll1" href="#" data-toggle="collapse" data-target="#collapse_meny_3">Portfolio</a>
            <div class="collapse" id="collapse_meny_3">
            <a href="/admin/pages/4" class="dropdown-item"> &#8226 Title</a> 
            <a href="/admin/portfolio" class="dropdown-item"> &#8226 Portfolio</a>
            </div>

            <a class="nav-link coll1" href="#" data-toggle="collapse" data-target="#collapse_meny_4">Contact</a>
            <div class="collapse" id="collapse_meny_4">
            <a href="/admin/pages/5" class="dropdown-item"> &#8226 Title</a>
            <a href="/admin/contact " class="dropdown-item">&#8226 Contact</a>
            </div>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin/users">Users</a>
        </li>
        
      </ul>
    </ul>
  </aside>
  <!-- /ASIDE -->

<!-- MAIN -->
  <main class="col-sm-7 col-md-8  col-lg-9 col-xl-10">
    <!-- @yield('page') -->

    <div class="card">
  <div class="card-header">
   @yield('section_title', 'dashboard')
  </div>
  <div class="card-body">

  @yield('section_content', 'welcome!')
   
</div>

@include('blocks.errors')
  </main>
  
<!-- /MAIN -->
</div>


@yield('test')




@endsection


@section('title', 'Ramonak')


@section('styles')
@include('parts.border')

@endsection

@section('scripts')

<script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>



    



<script>
  
  // SlideUP and SlideDown 
  $(document).ready(function() {

    // <!-- OnClick Event -->
    $(" .coll ").click(function(e) {
      //e.preventDefault();
      if ($(this).find("i").hasClass("fa-angle-down")) { //Icon Class Angel Down
        $(this).next(".coll1").slideDown(400); //Slide Down
        $(this).find("i").removeClass("fa-angle-down"); //Remove Icon Class Angel Down
        $(this).find("i").addClass("fa-angle-up"); //Add Icon Class Angel Up
      } else {
        $(this).next(".coll1").slideUp(400); //Slide Up
        $(this).find("i").removeClass("fa-angle-up"); //Remove Icon Class Angel Up
        $(this).find("i").addClass("fa-angle-down"); //Add Icon Class Angel Down
      }
    });


  });
</script>
<script>CKEDITOR.replace('editor');</script>
@endsection