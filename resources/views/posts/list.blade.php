<!doctype html>
<html lang="zxx">
<head>
    <title> Blog </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content=" " />
    <meta name="developer" content="Saidul Islam">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


   @include('layout.styles')

</head>
<body class="black-bg body-2" >

@include('layout.nav')
<!--
==============
    HOME
==============
-->
<section class="section relative portfolio-home">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="portfolio-title wow fadeInUp" data-wow-duration=".9s" data-wow-delay=".1s">
                    <h1>My Blog.</h1>
                    <span></span>
                    <p>The designer knows he has reached perfection not when he has nothing to add, but when there is nothing to remove.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
==================
    BLOG CONTENT
==================
-->
<section class="blog-content">
    <div class="container">
        <div class="row section-separator">
            <div class="col-md-8 col-sm-12">
                <div class="blog-content-inner">
                    <div class="blog-item">
                        <div class="blog_img">
                            <img src="{{ asset('/images/port-1.jpg') }}" alt="" class="img-fluid full_img">
                        </div>
                        <div class=" " >
                            <span class="bl-date span">13 May, 2019</span>
                            <span class="bl-title span">marketing</span>
                            <a href="single-blog.html"><h2>Buying the right telescope to take your love of astronomy to the next level is a big next step in the development.</h2></a>
                            <p>God creates dinosaurs. God destroys dinosaurs. God creates Man. Man destroys God. Man creates Dinosaurs.
                                We gotta burn the rain forest, dump toxic waste, pollute the air, ou know what? It is beets.
                                God creates dinosaurs. God destroys dinosaurs. God creates Man. Man destroys God. Man creates Dinosaurs.
                                We gotta burn the rain forest, dump toxic waste.</p>
                            <div class="btn-main">
                                <a href="single-blog.html" class="btn-all">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog_img">
                            <img src="{{ asset('/images/port-4.jpg') }}" alt="" class="img-fluid full_img">
                        </div>
                        <div class="blog-item-content">
                            <span class="bl-date span">13 May, 2019</span>
                            <span class="bl-title span">marketing</span>
                            <a href="single-blog.html"><h2>Buying the right telescope to take your love of astronomy to the next
                                    level is a big next step in the development.</h2></a>
                            <p>God creates dinosaurs. God destroys dinosaurs. God creates Man. Man destroys God. Man creates Dinosaurs.
                                We gotta burn the rain forest, dump toxic waste, pollute the air, ou know what? It is beets.
                                God creates dinosaurs. God destroys dinosaurs. God creates Man. Man destroys God. Man creates Dinosaurs.
                                We gotta burn the rain forest, dump toxic waste.</p>
                            <div class="btn-main">
                                <a href="single-blog.html" class="btn-all">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog_img">
                            <img src="{{ asset('/images/book-4.jpg') }}" alt="" class="img-fluid full_img">
                        </div>
                        <div class="blog-item-content">
                            <span class="bl-date span">13 May, 2019</span>
                            <span class="bl-title span">marketing</span>
                            <a href="single-blog.html"><h2>Buying the right telescope to take your love of astronomy to the next
                                    level is a big next step in the development.</h2></a>
                            <p>God creates dinosaurs. God destroys dinosaurs. God creates Man. Man destroys God. Man creates Dinosaurs.
                                We gotta burn the rain forest, dump toxic waste, pollute the air, ou know what? It is beets.
                                God creates dinosaurs. God destroys dinosaurs. God creates Man. Man destroys God. Man creates Dinosaurs.
                                We gotta burn the rain forest, dump toxic waste.</p>
                            <div class="btn-main">
                                <a href="single-blog.html" class="btn-all">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ev-button center wow fadeInUp">
                        <!-- <a href="" class="btn btn-fill purple-bg">Load More</a>    -->
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="blog-sidebar">
                    <form id="mailchimp-subscribe" class="col-sm-12 col-lg-12 mail-sub" method="post" data-toggle="validator">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="subscriber-email" placeholder="Search here" required="">
                        </div>
                    </form>
                    <div class="col-sm-12 sidebar-item">
                        <h4>Category</h4>
                        <ul>
                            <li><a href="">Education<span>(26)</span></a></li>
                            <li><a href="">Health <span>(8)</span></a></li>
                            <li><a href="">Weight Loss<span>(16)</span></a></li>
                            <li><a href="">Body fat<span>(2)</span></a></li>
                            <li><a href="">Named Here<span>(6)</span></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 sidebar-item popular-posts">
                        <h4>Popular Post</h4>
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('/images/port-1.jpg') }}" alt="">
                                    <div class="content">
                                        <h2>Buying the right telescope to take your love ..</h2>
                                        <span>23, june 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('/images/port-2.jpg') }}" alt="">
                                    <div class="content">
                                        <h2>Telescop love of astronomy to the next ... </h2>
                                        <span>23, june 2018</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('/images/port-4.jpg') }}" alt="">
                                    <div class="content">
                                        <h2>Take your love of astronomy to the next level ...</h2>
                                        <span>23, june 2018</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 sidebar-item popular-tags">
                        <h4>Tags</h4>
                        <ul>
                            <li><a href="">  CSS </a> </li>
                            <li><a href="">  HTML </a> </li>
                            <li><a href="">  PHP </a> </li>
                            <li><a href="">  Marketing </a> </li>
                            <li><a href="">  MySql </a> </li>
                            <li><a href="">  Pythne </a> </li>
                            <li><a href="">  C++ </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('//contact')
@include('layout.scripts')
</body>
</html>
