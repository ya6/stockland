@extends('admin.admin')

@section('title', 'Ramonak | show hero')

@section('section_title', 'Show hero')

@section('section_content')

@include('site.home')
    <br> 

    <div class="row">
        </div  class="col-md-6">
            <a href="/admin/pages/{{ $page->id }}/edit" class="btn btn-primary w-25">edit</a>
        </div>
    </div>


@endsection
