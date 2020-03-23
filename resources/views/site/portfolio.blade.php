 <!-- Portfolio -->
 <section id="portfolio" class="content">

<!-- Container -->
<div class="container portfolio_title">
<br>
    <!-- Title -->
    <div class="section-title">
        <h2>{!! ($portfolio_page = $pages[3] ?? $page)->name  !!}</h2>
    </div>
    <!--/Title -->

</div>
<!-- Container -->

<div class="portfolio-top"></div>

<!-- Portfolio Filters -->
<div class="portfolio">

    <div id="filters" class="sixteen columns">
        <ul class="clearfix">
            <li><a id="all" href="#" data-filter="*" class="active">
                    <h5>Все</h5>
                </a></li>
    @foreach($categories as $category)
    
        <li><a class="" href="#" data-filter=".{{ $category->filter }}">
            <h5>{{ $category->category }}</h5>
            </a>
        </li>

    @endforeach
        </ul>
    </div>
    <!--/Portfolio Filters -->

    <!-- Portfolio Wrapper -->



    
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;"
        id="portfolio_wrapper">

        @foreach($portfolios as $portfolio)

        <!-- Portfolio Item -->
    
        <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); 
        width: 337px; opacity: 1;"
            class="portfolio-item one-four  {{ $portfolio->filter }}   isotope-item">
            <div class="portfolio_img"> <img src="{{ asset('assets/img/products/' ) . '/' . $portfolio->image }}"
                    alt="Portfolio 1"> </div>
            <div class="item_overlay">
                <div class="item_info">
                    <h4 class="project_name"> {{ $portfolio->name }}</h4>
                </div>
            </div>
        </div>
        <!--/Portfolio Item -->
        @endforeach

      

    </div>
    <!--/Portfolio Wrapper -->

</div>
<!--/Portfolio Filters -->

<div class="portfolio_btm"></div>


<div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
</div>


</section>
<!--/Portfolio -->