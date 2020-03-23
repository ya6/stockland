@extends('admin.admin')

@section('title', 'Ramonak | Add logo')

@section('section_title', 'Main logo')

@section('section_content')

<div class="">
   <img src=" {{ asset('assets/img')  . '/' . $logo->logo }} " alt="logo" width="200"></a>
       <h5>{{ $logo->logo}}</h5>        
      
       

   </div>
    <a href="/admin/logo/{{ $logo->id }}/edit" class="btn btn-primary w-25">edit</a>
  </div>

@endsection

