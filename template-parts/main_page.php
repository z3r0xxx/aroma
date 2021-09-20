<!--
	1 ВЕРСИЯ:
		текст - b470fa
		фон футера - 002347
		фон копирайта - rgba(0,35,71,0.980392)

	2 ВЕРСИЯ:
		текст - 
		фон футера - 
		фон копирайта - 
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>me - Главная</title>

		<link rel="icon" href="<?php bloginfo('template_directory') ?>/img/Fevicon.png" type="image/png">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">

		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/nice-select/nice-select.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.carousel.min.css">

		<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

		<style>
			.site-main {
				font-family: 'Tenor Sans';
			}

			.hero-banner__content h4 {
				font-family: 'Tenor Sans';
			}
		</style>
	</head>
	<body>

		<main class="site-main">

			<section class="hero-banner">
				<div class="container" style="margin-left: -50;">
					<div class="row no-gutters align-items-center pt-60px">
						<div class="col-sm-7" style="color: #fff; padding: 50; margin-left: 50px; margin-top: 230;">
							<div class="hero-banner__content">
								<h4 style="font-weight: 600; color: #fff;">Люби себя.</h4>
								<p style="font-size: 15px;">Свобода быть собой. Проявить свою уникальность, творить свой собственный мир. Понимать и принимать себя. Уважать и ценить других. Любить себя и любить жизнь. Мечтать и воплощать. Быть только мной. Открыто и искренне говорить миру - это я. It's Me.</p>
								<a class="button button-hero" href="https://www.instagram.com/me.myfreedom/">ПОСМОТРЕТЬ</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!--================ Hero Carousel start =================-->
			<section class="section-margin mt-0">
				<div class="owl-carousel owl-theme hero-carousel">
					<div class="hero-carousel__slide">
						<img src="<?php bloginfo('template_directory') ?>/img/home/hero-slide1.png" alt="" class="img-fluid">
						<a href="#" class="hero-carousel__slideOverlay">
							<h3>Wireless Headphone</h3>
							<p>Accessories Item</p>
						</a>
					</div>
					<div class="hero-carousel__slide">
						<img src="<?php bloginfo('template_directory') ?>/img/home/hero-slide2.png" alt="" class="img-fluid">
						<a href="#" class="hero-carousel__slideOverlay">
							<h3>Wireless Headphone</h3>
							<p>Accessories Item</p>
						</a>
					</div>
					<div class="hero-carousel__slide">
						<img src="<?php bloginfo('template_directory') ?>/img/home/hero-slide3.png" alt="" class="img-fluid">
						<a href="#" class="hero-carousel__slideOverlay">
							<h3>Headphone</h3>
							<p>Accessories Item</p>
						</a>
					</div>
				</div>
			</section>
			<!--================ Hero Carousel end =================-->

			<section class="section-margin calc-60px" style="margin-bottom: -100">
				<div class="container">
					<div class="section-intro pb-60px">
						<!-- <p>Popular Item in the market</p> -->
						<h2>Наша <span class="section-intro__style">ФИЛОСОФИЯ</span></h2>
						<style>
							p {
								margin-top: 20px;
								margin-bottom: 20px;
							}
						</style>
						<p style="margin-bottom: 20px; margin-top: 40px;">ME. Моя жизнь - моя свобода и ответственность. Моя смелость быть собой. День за днем я хочу быть в хорошем настроении, получать и дарить любовь, расти духовно и интеллектуально, испытывать еще больше радости. Я хочу дать миру то, что внутри меня - смелость, креативность, честность, силу моего духа. Я мечтаю о лучшем и большем. Я заявляю открыто о себе и встречаю таких же прекрасных искренних людей. Мы разные, каждый уникален и неповторим. ME - философия моей свободы и уникальности без ограничений. ME - я люблю себя.</p>
						<p>Каждый день команда me. создает коллекцию эксклюзивных новинок для тебя . С каждым заказом ты получаешь подарки от бренда. Специальная программа лояльности для тебя, которая действует всегда. Именно ты выбираешь уникальность и стоимость.</p>
					</div>
				</div>
			</section>

			<!-- ================ trending product section start ================= -->  

			<style>
				.hueta {
					max-width: 1600px;
					width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;
				}
			</style>

			<section class="section-margin calc-60px">
				<div class="hueta">
					<div class="section-intro pb-60px" style="max-width: 1140px; width: 100%;
					padding-right: 15px;
					padding-left: 15px;
					margin-right: auto;
					margin-left: auto;">
						<!-- <p>Popular Item in the market</p> -->
						<h2>Купи <span class="section-intro__style">СЕГОДНЯ</span></h2>
					</div>
					<div class="row">

						<?php 
							$args = array(
								'post_type'      => 'product',
								'posts_per_page' => 9,
								'product_cat'    => 'main_page_category'
							);

							$loop = new WP_Query( $args );

							while ( $loop->have_posts() ) : $loop->the_post();
								global $product;

								$product_name = get_the_title();
								$product_permalink = get_permalink();
								$product_price = $product->get_price();
							?>
								<!-- <div class="col-md-6 col-lg-4"> -->
								<div class="col-xs-6 col-md-4">
									<div class="card text-center card-product">
										<div class="card-product__img">
											<img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
										</div>
										<div class="card-body">
											<h4 class="card-product__title"><a href="<?php echo $product_permalink; ?>"><?php echo $product_name; ?></a></h4>
											<p class="card-product__price"><?php echo $product_price; ?> </p>
										</div>
									</div>
								</div>
							<?php
							endwhile;

							wp_reset_query();
						?>
					</div>
				</div>
			</section>
			<!-- ================ trending product section end ================= -->  

			<!-- ================ offer section start ================= --> 
			<section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
				<div class="container">
					
					<style>
						.offer__content {
							display: flex;
						}

						.offer__content h3 h4 p {
							color: #fff;
							display: flex;
						}

						.button_hueta {
							color: #1f6655;
							background-color: #fff;
							border: #fff 1px solid;
							border-radius: 30px;
							padding: 12px 50px;
							transition: all .4s ease;
						}
						.button_hueta:hover {
							background-color: #1f6655;
							color: #fff;
						}
					</style>

					<div class="row">
						<div class="col-xl-5" style="margin-left: -150;">
							<div class="offer__content text-center">
								<div>
									<h3 style="color: #fff; font-weight: 600;">ПРОГРАММА ЛОЯЛЬНОСТИ!</h3>
									<a class="button_hueta mt-3 mt-xl-4" href="#">ОЗНАКОМИТЬСЯ</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- ================ offer section end ================= --> 

			<!-- ================ Subscribe section start ================= --> 
			<section class="subscribe-position">
				<div class="container">
					<div class="subscribe text-center">
						<h3 class="subscribe__title">УЗНАЙ ПЕРВЫМ О НОВЫХ ПРИНТАХ</h3>
						<p>Подпишись чтобы быть в курсе новинок!</p>
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
						<div>
    						я соглашаюсь с <a href="privacy"> Политикой обработки персональных данных</a>
						</div>
					</div>
				</div>
			</section>
			<!-- ================ Subscribe section end ================= -->
		</main>

		<script src="<?php bloginfo('template_directory') ?>/vendors/jquery/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/bootstrap/bootstrap.bundle.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/nice-select/jquery.nice-select.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/jquery.ajaxchimp.min.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/vendors/mail-script.js"></script>
		<script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
	</body>
</html>