<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer " style = "">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section p-0">
        <div class="row">


        <div id ="" class="col-lg-7 col-sm-5 text-center ">
                
                <img src="{{ asset('assets/img').'/'.($hero_page=$pages[0] ?? $page)->image }}" class=" text-center zoomIn wow animated " alt="image" width="100%" />

		      </div>

          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated my-auto"> 
        
            <div class="text-center mb-5"><img src="{{ asset('assets/img').'/'.($hero_page=$pages[0] ?? $page)->logo }}"
             width="120" alt="top logo" /></div>
              <h1 class=" h3 text-white text-uppercase text-center">{!! $hero_page->title !!}</h2>
              <p>{!! $hero_page->text !!}</p>
              <br>
              <a href="#service"  class="mt-5 read_more2 mx-auto">Узнать больше</a> </div>
          </div>

         
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

  