<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>me - Товар</title>

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
				letter-spacing: .2em;
				text-transform: uppercase;
				color: #1f6655;
				position: relative;
			}
			.text .title-h3, .text h3 {
				font-family: 'Tenor Sans';
				line-height: 21px;
				font-size: 14px;
				letter-spacing: .15em;
				text-transform: uppercase;
				color: #1f6655;
				margin: 70px 0 30px 0;
			}
			.text .title-h4, .text h4 {
				font-family: 'Tenor Sans';
				line-height: 16px;
				font-size: 11px;
				letter-spacing: .1em;
				text-transform: uppercase;
				margin: 70px 0 30px 0;
			}
			.text ._p, .text p {
				line-height: 24px;
				font-size: 16px;
				margin: 16px 0;
			}
		</style>
	</head>

	<body>

  		<!--================Single Product Area =================-->
		<div class="product_image_area">
			<div class="container">
				<div class="row s_product_inner">

						<?php 
							
							global $product; 

							$product_id = $product->get_id();
							$product_name = get_the_title();
							$product_permalink = get_permalink();
							$product_price = $product->get_price();

						?>

					<div class="col-lg-6">
						<div class="owl-carousel owl-theme s_Product_carousel">
							<div class="single-prd-item">
								<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
							</div>
						</div>
					</div>

					<div class="col-lg-5 offset-lg-1">
						<div class="s_product_text">
							<h3><?php echo $product_name; ?></h3>
							<div class="text"><h1><?php echo $product_price; ?> </h1></div>
							<ul class="list">
								<li><a><span>Состояние :</span> в наличии</a></li>
								<?php 

									$product_categories = array(
										"category_tshirts"			=> 18,
										"category_socks"			=> 19,
										"category_sweatshirts" 		=> 20,
										"category_hoodies" 			=> 21,
										"category_main_page" 		=> 23,
										"category_archive" 			=> 24
									);

									$categories = get_terms( ['object_ids' => $product_id, 'taxonomy' => 'product_cat'] );
									$product_category_ids = array();
									foreach ( $categories as $key => $category ) {
										foreach ( $category as $key1 => $value ) {
											if ( $key1 == "term_id" ) {
												array_push($product_category_ids, $value);
											}
										}
									}

									if ( in_array( 18, $product_category_ids ) ) {
										?>
										<li><a><span>Категория :</span> футболки</a></li>
										<?php
									}
									elseif ( in_array( 19, $product_category_ids ) ) {
										?>
										<li><a><span>Категория :</span> носки</a></li>
										<?php
									}
									elseif ( in_array( 20, $product_category_ids ) ) {
										?>
										<li><a><span>Категория :</span> свитшоты</a></li>
										<?php
									}
									elseif ( in_array( 21, $product_category_ids ) ) {
										?>
										<li><a><span>Категория :</span> худи</a></li>
										<?php
									}

								?>
								<li><a><span>Размер :</span> oversize</a></li>
							</ul>


							<?php 

								$product_categories = array(
									"category_tshirts"			=> 18,
									"category_socks"			=> 19,
									"category_sweatshirts" 		=> 20,
									"category_hoodies" 			=> 21,
									"category_main_page" 		=> 23,
									"category_archive" 			=> 24
								);

								$categories = get_terms( ['object_ids' => $product_id, 'taxonomy' => 'product_cat'] );
								$product_category_ids = array();
								foreach ( $categories as $key => $category ) {
									foreach ( $category as $key1 => $value ) {
										if ( $key1 == "term_id" ) {
											array_push($product_category_ids, $value);
										}
									}
								}

								if ( in_array( 18, $product_category_ids ) ) {
									?>
									
									<p>
										Для тебя мы создали футболку oversize , потому что знаем — ты любишь комфорт и хочешь быть в тренде. Авторский, безаналоговый, эксклюзивный принт делает твое худи уникальным и единственным. <br>
										<b>me.</b> - бренд унисекс одежды. Футболки со спущенным плечом.
									</p>

									<?php 
								}
								elseif ( in_array( 19, $product_category_ids ) ) {
									?>
									<li><a><span>Категория :</span> носки</a></li>
									<?php
								}
								elseif ( in_array( 20, $product_category_ids ) ) {
									?>
									<p> Для тебя мы создали свитшоты oversize, потому что знаем — ты любишь комфорт и хочешь быть в тренде. Авторский, безаналоговый, эксклюзивный принт делает твое худи уникальным и единственным. <br>
										<b>me.</b> - бренд унисекс одежды. Свитшот со спущенным плечом.
									</p>
									<?php
								}
								elseif ( in_array( 21, $product_category_ids ) ) {
									?>
									<p> Для тебя мы создали худи oversize, потому что знаем — ты любишь комфорт и хочешь быть в тренде. Авторский, безаналоговый, эксклюзивный принт делает твое худи уникальным и единственным. <br>
										<b>me.</b> - бренд унисекс одежды. Худи со спущенным плечом и карманом-кенгуру будет комфортно каждому.
									</p>
									<?php } 
						?>

							<div class="product_count" style="margin-top: 24px; display: flex; flex-flow: column wrap;">
								<form action="http://mefreedom.ru/checkout" method="post">
									<?php 

										$product_categories = array(
											"category_tshirts"			=> 18,
											"category_socks"			=> 19,
											"category_sweatshirts" 		=> 20,
											"category_hoodies" 			=> 21,
											"category_main_page" 		=> 23,
											"category_archive" 			=> 24
										);

										$categories = get_terms( ['object_ids' => $product_id, 'taxonomy' => 'product_cat'] );
										$product_category_ids = array();
										foreach ( $categories as $key => $category ) {
											foreach ( $category as $key1 => $value ) {
												if ( $key1 == "term_id" ) {
													array_push($product_category_ids, $value);
												}
											}
										}

										if ( in_array( 18, $product_category_ids ) ) {
											?>
											<input type="hidden" name="product_type" value="tshirt">
											<?php
										}
										elseif ( in_array( 19, $product_category_ids ) ) {
											?>
											<input type="hidden" name="product_type" value="socks">
											<?php
										}
										elseif ( in_array( 20, $product_category_ids ) ) {
											?>
											<input type="hidden" name="product_type" value="sweatshirt">
											<?php
										}
										elseif ( in_array( 21, $product_category_ids ) ) {
											?>
											<input type="hidden" name="product_type" value="hoodie">
											<?php
										}

									?>

									<input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
									<input type="hidden" name="product_size" value="<?php echo "oversize"; ?>">
									<input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
									<input type="hidden" name="product_price" value="<?php echo $product_price; ?>">
									<input type="hidden" name="product_permalink" value="<?php echo $product_permalink; ?>">

									<button><a class='button primary-btn'>КУПИТЬ</a></button>
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!--================End Single Product Area =================-->

		<!--================Product Description Area =================-->
		<section class="product_description_area">
			<div class="container">

				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item"><a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Описание</a></li>
					<!-- <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Характеристики</a></li> -->
				</ul>

				<div class="tab-content" id="myTabContent">

					<!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									<tr>
										<td><h5>Width</h5></td>
										<td><h5>128mm</h5></td>
									</tr>
									<tr>
										<td><h5>Height</h5></td>
										<td><h5>508mm</h5></td>
									</tr>
									<tr>
										<td><h5>Depth</h5></td>
										<td><h5>85mm</h5></td>
									</tr>
									<tr>
										<td><h5>Weight</h5></td>
										<td><h5>52gm</h5></td>
									</tr>
									<tr>
										<td><h5>Quality checking</h5></td>
										<td><h5>yes</h5></td>
									</tr>
									<tr>
										<td><h5>Freshness Duration</h5></td>
										<td><h5>03days</h5></td>
									</tr>
									<tr>
										<td><h5>When packeting</h5></td>
										<td><h5>Without touch of hand</h5></td>
									</tr>
									<tr>
										<td><h5>Each Box contains</h5></td>
										<td><h5>60pcs</h5></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->

					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row"></div>
					</div>

					<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
						<?php 

							$product_categories = array(
								"category_tshirts"			=> 18,
								"category_socks"			=> 19,
								"category_sweatshirts" 		=> 20,
								"category_hoodies" 			=> 21,
								"category_main_page" 		=> 23,
								"category_archive" 			=> 24
							);

							$categories = get_terms( ['object_ids' => $product_id, 'taxonomy' => 'product_cat'] );
							$product_category_ids = array();
							foreach ( $categories as $key => $category ) {
								foreach ( $category as $key1 => $value ) {
									if ( $key1 == "term_id" ) {
										array_push($product_category_ids, $value);
									}
								}
							}

							if ( in_array( 18, $product_category_ids ) ) {
								?>

								<p>
									Наши футболки созданы исключительно из материалов самого высокого качества: полотно джерси (кулирная гладь), прошедшее предварительную термоусадку; особо гладкую нить, гребенную пряжу. <br>
									Материал: <b>Хлопок</b> 100%
								</p>

								<?php 
							}
							elseif ( in_array( 19, $product_category_ids ) ) {
								?>
								<li><a><span>Категория :</span> носки</a></li>
								<?php
							}
							elseif ( in_array( 20, $product_category_ids ) ) {
								?>

								<p>
									Ты получишь 2 подарка при покупке свитшота, потому что мы любим радовать. <br>
									Если у тебя есть особенные пожелания перед заказом худи, ты хочешь задать вопросы, то напиши нам.
								</p>
								<p>
									Материал: <b>Хлопок</b> 80%, <b>полиэстер</b> 20% <br>
									Свитшот приятный на ощупь снаружи и внутри. Ты получишь удовольствие, когда наденешь его.
								</p>
								<?php
							}
							elseif ( in_array( 21, $product_category_ids ) ) {
								?>

								<p>
									Ты получишь 2 подарка при покупке худи, потому что мы любим радовать. <br>
									Если у тебя есть особенные пожелания перед заказом худи, ты хочешь задать вопросы, то напиши нам.
								</p>
								<p>
									Манжеты и низ изделия отделаны не тугой резинкой. Внутренняя сторона изделия с уютным, согревающим начесом.	<br>
									Материал: <b>Хлопок</b> 80%, <b>полиэстер</b> 20% <br>
									Худи приятное на ощупь снаружи и внутри. Ты получишь удовольствие, когда наденешь его.
								</p>
								<?php } 
						?>
					</div>

				</div>
			</div>
		</section>
		<!--================End Product Description Area =================-->

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