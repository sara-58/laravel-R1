<!doctype html>
<html class="no-js" lang="en">

@include('includes.head')

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!--header-top start -->
    @include('includes.header')
    <!--header-top end -->

    <!-- top-area Start -->
    @include('includes.topArea')
    <!-- top-area End -->

    <!--welcome-hero start -->
    @include('includes.welcomeHero')
    <!--welcome-hero end -->

    <!--list-topics start -->
    @include('includes.listTopics')
    <!--list-topics end-->

    <!--works start -->
    @include('includes.works')
    <!--works end -->

    <!--explore start -->
    @include('includes.explore')
    <!--explore end -->

    <!--reviews start -->
    @include('includes.reviews')
    <!--reviews end -->

    <!-- statistics strat -->
    @include('includes.statistics')
    <!-- statistics end -->

    <!--blog start -->
    <section id="blog" class="blog">
        <div class="container">
            <div class="section-header">
                <h2>news and articles</h2>
                <p>Always upto date with our latest News and Articles </p>
            </div><!--/.section-header-->
            <div class="blog-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="{{asset('assets/images/blog/b1.jpg')}}" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="{{asset('assets/images/blog/b2.jpg')}}" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-blog-item">
                            <div class="single-blog-item-img">
                                <img src="{{asset('assets/images/blog/b3.jpg')}}" alt="blog image">
                            </div>
                            <div class="single-blog-item-txt">
                                <h2><a href="#">How to find your Desired Place more quickly</a></h2>
                                <h4>posted <span>by</span> <a href="#">admin</a> march 2018</h4>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur de adipisicing elit, sed do eiusmod tempore incididunt ut labore et dolore magna.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->

    </section><!--/.blog-->
    <!--blog end -->

    <!--subscription strat -->
    @include('includes.contact')
    <!--subscription end -->

    <!--footer start-->
    @include('includes.footer')
    <!--footer end-->

    @include('includes.footerJS')

</body>

</html>