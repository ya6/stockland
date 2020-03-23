@extends('admin.admin')

@section('title', 'Ramonak | show about')

@section('section_title', 'Show about')

@section('section_content')

@include('site.about')
    <br> 

    <div class="row">
        </div  class="col-md-6">
            <a href="/admin/pages/{{ $page->id }}/edit" class="btn btn-primary w-25">edit</a>
        </div>
    </div>


@endsection
