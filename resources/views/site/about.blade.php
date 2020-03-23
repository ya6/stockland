 <!--Aboutus-->
 <section id="aboutUs">
        <div class="inner_wrapper">
            <div class="container">
                <h2>{!! ($about_page=$pages[1] ?? $page)->name !!}</h2>
                <div class="inner_section">
                    <div class="row">
                        
                        <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                            <div class=" delay-01s animated fadeInDown wow animated">
                                <h3>{!! $about_page->title !!}</h3><br />
                                <h3>{!! $about_page->text !!}</p>
                               
                            </div>
                            <div class="work_bottom"> <span>Хочешь узналь больше..</span> <a href="#contact"
                                    class="contact_btn">Напиши мне</a> </div>
                        </div>

                        <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img
                                src="{{ asset('assets/img').'/'.$about_page->image }}"
                                class="rounded-circle delay-03s animated wow zoomIn" alt=""></div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--/Aboutus-->
