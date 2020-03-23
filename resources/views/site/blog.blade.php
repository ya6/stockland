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
                        <p class="animated fadeInDown wow">{!! $blog->text !!}</p>
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