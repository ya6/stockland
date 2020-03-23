@extends('admin.admin')

@section('title', 'Ramonak | show blogs')

@section('section_title', 'Show blogs')
@section('section_content')

<!--Service- -Blog- -->
<section id="service">
    <div class="container">
        <br>
        <h2>{!! ($blog_page=$pages[2] ?? $page)->name !!}</h2>
        <div class="service_wrapper">
            <div class="row">
                @foreach($blogs as $k=>$blog)

                <div class="col-lg-4">
                    <div class="service_block {{ ($k>2) ? 'mrgTop' :'' }}">
                        <div class="delay-03s animated wow  zoomIn">

                            <span><img src="{{ asset('assets/img').'/'.$blog->icon }}" width="120" alt="icon" /></span> </div>
                        <h3 class="animated fadeInUp wow">{{ $blog->name }}</h3>
                        <p class="animated fadeInDown wow">{{ $blog->text }}</p>
                    </div>
                    <div class="d-flex justify-content-around" style="bor der: 1px solid blue">
                        <a href="/admin/pages/services/{{ $blog->id }}/edit" class="btn btn-primary  w-50 text-light">Edit</a>

                        <form action="/admin/pages/services/{{ $blog->id }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-outline-danger  " type="submit">Delete</button>
                        </form>
                    </div>

                </div>

                @endforeach
            </div>
            <!-- </div> row -->


        </div>

    </div>
    </div>
</section>
<!--/Service -Blog- -->

<br>
<div class="container pb-2">
    <div class="row">
        </div class="col-md-6">
            <a href="/admin/pages/services/create" class="btn btn-primary w-100">Add new blog</a>
        </div>
    </div>
</div>
@endsection