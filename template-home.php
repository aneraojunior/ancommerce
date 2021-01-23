<?php /* Template Name: Home Page */ get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <section class="templatehome-slide bg-light text-center">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="d-block w-100" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/01/ps5-slide1.jpg">
                            <div class="carousel-caption d-none d-md-block d-sm-block">
                                <h4>Title h5</h4>
                                <h3>bla bla bla bla bla bla bla bla</h3>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/01/slide2-xbox.jpg" >
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="http://127.0.0.1/wordpress/wp-content/uploads/2021/01/slide3-switch.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

            <!-- Image Showcases -->
            <section class="showcase">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">

                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-showcase-1.jpg');"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>Fully Responsive Design</h2>
                            <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-6 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-showcase-2.jpg');"></div>
                        <div class="col-lg-6 my-auto showcase-text">
                            <h2>Updated For Bootstrap 4</h2>
                            <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-showcase-3.jpg');"></div>
                        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                            <h2>Easy to Use &amp; Customize</h2>
                            <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Testimonials -->
            <section class="testimonials text-center bg-light">
                <div class="container">
                    <h2 class="mb-5">What people are saying...</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials-1.jpg" alt="">
                                <h5>Margaret E.</h5>
                                <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials-2.jpg" alt="">
                                <h5>Fred S.</h5>
                                <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials-3.jpg" alt="">
                                <h5>Sarah W.</h5>
                                <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php get_footer(); ?>
