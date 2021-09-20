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
        <link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">
	</head>

	<body>

		<style>
			.wrap {
                width: 65vw;
                max-width: 620px;
                min-width: 540px;
                margin: 0 auto;
            }

            .container {
                font-family: 'Tenor Sans';
            }

			.text {
				font-family: 'Tenor Sans';
				font-style: normal;
				font-weight: 400;
				line-height: 24px;
				font-size: 16px;
			}
			.text .title-h1, .text h1 {
				font-family: 'Tenor Sans';
				line-height: 40px;
				font-size: 30px;
				text-align: center;
				letter-spacing: .2em;
				text-transform: uppercase;
				color: #1f6655;
				margin: 70px 0 70px -390px;
				width: 780px;
				position: relative;
				left: 50%;
			}
		</style>

		<!-- ================ start banner area ================= -->	
		<div class="wrap">
			<div class="text">
				<h1>НАПИШИТЕ НАМ</h1>
			</div>
		</div>
		<!-- ================ end banner area ================= -->

        <!-- ================ contact section start ================= -->
        <section class="section-margin--small">
            <div class="container">

                <!-- <div class="d-none d-sm-block mb-5 pb-4">
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
                </div> -->


                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                        <!-- <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>California United States</h3>
                                <p>Santa monica bullevard</p>
                            </div>
                        </div> -->
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                            <div class="media-body">
                                <h3><a href="tel:79602777424">+7 960 277 74 24</a></h3>
                                <p>С 10 до 6</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:mefreedom@bk.ru">mefreedom@bk.ru</a></h3>
                                <p>Пишите нам в любое время!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-9">
                        <form action="<?php bloginfo('template_directory') ?>/contact_form.php" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Введи твоё имя">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Введи твою эл. почту">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" placeholder="Введи твой вопрос (кратко)">
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5" placeholder="Введи сообщение"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center text-md-right mt-3">
                                <button type="submit" class="button button--active button-contactForm">ОТПРАВИТЬ</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- ================ contact section end ================= -->

        <!-- ================ Subscribe section start ================= --> 
			<section class="subscribe-position">
				<div class="container">

					<div class="subscribe text-center">
						<h3 class="subscribe__title">СЛЕДИТЕ ЗА НОВИНКАМИ И АКЦИЯМИ</h3>
						<p>Подпишитесь на новостную рассылку и первым получайте уведомления о новых товарах и акциях!</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline mt-5 pt-1">
								<div class="form-group ml-sm-auto">
									<input class="form-control mb-1" type="email" name="EMAIL" placeholder="ТВОЯ ЭЛ. ПОЧТА" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ТВОЯ ЭЛ. ПОЧТА '" >
									<div class="info"></div>
								</div>
								<button class="button button-subscribe mr-auto mb-1" type="submit">ПОДПИСАТЬСЯ</button>
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
							</form>
						</div>
					</div>

				</div>
			</section>
			<!-- ================ Subscribe section end ================= -->

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