<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>me - Контакты</title>

		<link rel="icon" href="<?php bloginfo('template_directory') ?>/img/Fevicon.png" type="image/png">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">

		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/nice-select/nice-select.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.carousel.min.css">
    </head>

    <body>

        <?php
            global $post;
            $postslist = get_posts( array( 'posts_per_page' => 2, 'category'=>'news' ) );
            foreach ( $postslist as $post ){
                setup_postdata($post);
            ?>
                <div>
                    <?php echo the_date(); ?> - выводит дату новости 
                    <?php echo the_title(); ?> - выводит заголовок новости
                    <?php echo the_excerpt(); ?> - выводит краткое описание 
                    <?php echo the_post_thumbnail(); ?> - выводит превью новости - картинку 
                </div>
            <?php 
            }
            wp_reset_postdata();  
        ?>

        <!-- ================ start banner area ================= -->
        <section class="blog-banner-area" id="contact">
            <div class="container h-100">
                <div class="blog-banner">
                    <div class="text-center">
                        <h1>Напишите нам</h1>
                        <nav aria-label="breadcrumb" class="banner-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="http://localhost">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Напишите нам</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ end banner area ================= -->

        <!-- ================ contact section start ================= -->
        <section class="section-margin--small">
            <div class="container">

                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 420px;"></div>
                    <script>
                        function initMap() {
                            var uluru = {lat: -25.363, lng: 131.044};
                            var grayStyles = [
                            {
                                featureType: "all",
                                stylers: [
                                { saturation: -90 },
                                { lightness: 50 }
                                ]
                            },
                            {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: -31.197, lng: 150.744},
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel:  false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
                </div>


                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>California United States</h3>
                                <p>Santa monica bullevard</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                            <div class="media-body">
                                <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-9">
                        <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center text-md-right mt-3">
                                <button type="submit" class="button button--active button-contactForm">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- ================ contact section end ================= -->

        <script src="<?php bloginfo('template_directory') ?>/vendors/jquery/jquery-3.2.1.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/vendors/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/vendors/skrollr.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/vendors/nice-select/jquery.nice-select.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/vendors/jquery.ajaxchimp.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/vendors/mail-script.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</body>
</html>