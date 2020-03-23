@extends('admin.admin')

@section('title', 'Ramonak | show fortfolio')

@section('section_title', 'Show fortfolio')

@section('section_content')
<div class="d-flex">
    <ul class="list-unstyled">

        @foreach($portfolios as $portfolio)
        <li class="media my-3 align-items-center">
            <img class=" mt-1 mr-3" src="{{ asset('assets/img/products/' ) . '/' . $portfolio->image }}" alt="Portfolio's photo" width="120">
            <div class="media-body ">
                <h5 class="mt-0 mb-1 ">Category: <strong>{{ $portfolio->category }} <strong></h5>
                <h5 class="mt-0 mb-1">filter: <strong>{{ $portfolio->filter    }} <strong></h5>
                <h5 class="mt-0 mb-1">name: {{ $portfolio->name }} </h5>
                <h5 class="mt-0 mb-1">image: {{ $portfolio->image }} </h5>
              
            </div>
            <div class="d-flex justify-content-around ml-2" style="b order: 1px solid blue;">
                <a href=" /admin/portfolio/{{$portfolio->id}}/edit " class="btn btn-primary btl-lg text-light mr-5">Edit</a>

                <form action="/admin/portfolio/{{$portfolio->id}} " method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger  " type="submit">Delete</button>
                </form>
            </div>
        </li>
        <hr>

        @endforeach
    </ul>
</div>

<br>
<div class=" pb-2">
    <div class="row">
        </div class="col-md-6">
            <a href="/admin/portfolio/create" class="btn btn-primary w-50">Add new item</a>
        </div>
    </div>
</div>

@endsection