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

  		<!--================Single Product Area =================-->
		<div class="product_image_area">
			<div class="container">
				<div class="row s_product_inner">

						<?php 
							
							global $product; 

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
							<h2>$<?php echo $product_price; ?></h2>
							<ul class="list">
								<li><a class="active" href="#"><span>Category :</span> 123</a></li>
								<li><a><span>Availibility :</span> в наличии</a></li>
							</ul>
							<p> Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
								something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
								during the winter.</p>

							<div class="product_count" style="margin-top: 24px;">
								<a class="button primary-btn" href="#">КУПИТЬ</a>               
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
					<li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Характеристики</a></li>
				</ul>

				<div class="tab-content" id="myTabContent">

					<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
						<p> Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes
							and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in
							Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to
							London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
							officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a
							job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when
							showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a
							child’s painting set for her birthday and it was with this that she produced her first significant work, a
							half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly
							named ‘Hangover’ by Beryl’s husband and</p>
						<p> It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
							more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
							the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
							more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
							streamlined plan of cooking that is more efficient for one person creating less</p>
					</div>

					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
					</div>

					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row"></div>
					</div>

					<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
						<p> Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes
							and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in
							Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to
							London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
							officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a
							job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when
							showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a
							child’s painting set for her birthday and it was with this that she produced her first significant work, a
							half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly
							named ‘Hangover’ by Beryl’s husband and</p>
						<p> It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
							more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
							the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
							more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
							streamlined plan of cooking that is more efficient for one person creating less</p>
					</div>

				</div>
			</div>
		</section>
		<!--================End Product Description Area =================-->

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