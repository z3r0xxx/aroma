<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>me - Магазин</title>

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
				<h1>МАГАЗИН</h1>
			</div>
		</div>
		<!-- ================ end banner area ================= -->

		<!-- ================ category section start ================= -->		  
		<section class="section-margin mt-0">
			<div class="container">
				<div class="row">

					<!-- Start Best Seller -->
					<section class="lattest-product-area pb-40 category-list">
						<div class="row">

							<?php 
								$args = array(
									'post_type'      => 'product',
									'posts_per_page' => 10,
									'product_cat'    => 'tshirts'
								);

								$loop = new WP_Query( $args );

								while ( $loop->have_posts() ) : $loop->the_post();
									global $product;

									$product_name = get_the_title();
									$product_permalink = get_permalink();
									$product_price = $product->get_price();
								?>
									<div class="col-xs-6 col-md-4">
										<div class="card text-center card-product">
											<div class="card-product__img">
												<img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
											</div>
											<div class="card-body">
												<p>Футболки</p>
												<h4 class="card-product__title"><a href="<?php echo $product_permalink; ?>"><?php echo $product_name; ?></a></h4>
												<p class="card-product__price"><?php echo $product_price; ?> </p>
											</div>
										</div>
									</div>
								<?php
								endwhile;

								wp_reset_query();
							?>

							<?php 
								$args = array(
									'post_type'      => 'product',
									'posts_per_page' => 10,
									'product_cat'    => 'hoodies'
								);

								$loop = new WP_Query( $args );

								while ( $loop->have_posts() ) : $loop->the_post();
									global $product;

									$product_name = get_the_title();
									$product_permalink = get_permalink();
									$product_price = $product->get_price();
									
								?>
									<div class="col-xs-6 col-md-4">
										<div class="card text-center card-product">
										<div class="card-product__img">
											<img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
										</div>
										<div class="card-body">
											<p>Худи</p>
											<h4 class="card-product__title"><a href="<?php echo $product_permalink; ?>"><?php echo $product_name; ?></a></h4>
											<p class="card-product__price"><?php echo $product_price; ?> </p>
										</div>
										</div>
									</div>
								<?php
								endwhile;

								wp_reset_query();
							?>

							<?php 
								$args = array(
									'post_type'      => 'product',
									'posts_per_page' => 10,
									'product_cat'    => 'sweatshirts'
								);

								$loop = new WP_Query( $args );

								while ( $loop->have_posts() ) : $loop->the_post();
									global $product;

									$product_name = get_the_title();
									$product_permalink = get_permalink();
									$product_price = $product->get_price();
								?>
									<div class="col-xs-6 col-md-4">
										<div class="card text-center card-product">
										<div class="card-product__img">
											<img class="card-img" src="<?php the_post_thumbnail_url(); ?>" alt="">
										</div>
										<div class="card-body">
											<p>Свитшоты</p>
											<h4 class="card-product__title"><a href="<?php echo $product_permalink; ?>"><?php echo $product_name; ?></a></h4>
											<p class="card-product__price"><?php echo $product_price; ?> </p>
										</div>
										</div>
									</div>
								<?php
								endwhile;

								wp_reset_query();
							?>

							<?php 
								$args = array(
									'post_type'      => 'product',
									'posts_per_page' => 10,
									'product_cat'    => 'socks'
								);

								$loop = new WP_Query( $args );

								while ( $loop->have_posts() ) : $loop->the_post();
									global $product;

									$product_name = get_the_title();
									$product_permalink = get_permalink();
									$product_price = $product->get_price();
								?>
									<div class="col-xs-6 col-md-4">
										<div class="card text-center card-product">
											<div class="card-product__img">
												<img class="card-img" src="<?php echo $product_thumbnail; ?>" alt="">
											</div>
											<div class="card-body">
												<p>Носочки</p>
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
					</section>
					<!-- End Best Seller -->
					</div>
				</div>
			</div>
		</section>
		<!-- ================ category section end ================= -->		

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