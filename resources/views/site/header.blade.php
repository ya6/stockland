<!--Header_section-->
<header id="header_wrapper">
  <div class="container">

	  <nav class="navbar  navbar-expand-md navbar-light" role="navigation">

        <div id="" class="container navStyle">

          <!-- <a  class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" width="95"></a> -->
         
          <a  class="navbar-brand" href="#"><img src=" {{ asset('assets/img')  . '/' . $logo[0]->logo }} " alt="logo" width="{{$logo[0]->width}}"></a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
          </button>
  <div class="collapse navbar-collapse" id="mainNav">
          <ul class="nav navbar-nav ml-auto">

              @foreach($pages as $page)
              <li class="ml-4 nav-item {{ $page->alias == 'hero_section' ? 'active' : '' }}"> 
                  <a class="" href="#{{ $page->alias }}" class="scroll-link">{{ $page->name }} </a>
              </li>
              @endforeach

          </ul>
  </div>    
        </div>

    </nav>
   
  </div>
  @include('parts.errors')
  @include('parts.messages')
</header>
<!--Header_section--> 
