@extends('admin.admin')

@section('title', 'Ramonak | show blog')

@section('section_title', 'Show blog')

@section('section_content')


    <br> 
<h1>{{$page->name}}</h1>
    <div class="row">
        </div  class="col-md-6">
            <a href="/admin/pages/{{ $page->id }}/edit" class="btn btn-primary w-25">edit</a>
        </div>
    </div>


@endsection

