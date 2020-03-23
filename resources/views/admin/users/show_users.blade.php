@extends('admin.admin')

@section('title', 'Ramonak | show users')

@section('section_title', 'Show users')

@section('section_content')


<div class="d-flex">
    <ul class="list-unstyled">

        @foreach($users as  $key => $user)
        <li class="media my-3 align-items-center">
          
            <div class="media-body ">
                <h5 class="mt-0 mb-1 ">Name: <strong>{{ $user->name }} <strong></h5>
                <h5 class="mt-0 mb-1">email: <strong>{{ $user->email    }} <strong></h5>
               
              
            </div>
            <div class="d-flex justify-content-around ml-5" style="b order: 1px solid blue;">
              <!-- ($key != $users->count()-1) -->
              @if($key != 0)
                <form action="/admin/users/{{$user->id}} " method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-outline-danger  " type="submit">Delete</button>
                </form>
                @endif
            </div>
        </li>
        <hr>

        @endforeach
    </ul>
</div>



@endsection