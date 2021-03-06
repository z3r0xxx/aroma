<?php 

$post_type = get_post_type(); 
if ($post_type = "product") {

	get_template_part( 
		$slug = "template-parts/product"
	);

} else { ?>

<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<title>me - Статья</title>

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

		<section class="blog-banner-area" id="blog">
			<div class="container h-100">
				<div class="blog-banner">
					<div class="text-center">
						<h1>Blog Details</h1>
						<nav aria-label="breadcrumb" class="banner-breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Blog Details</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</section>

		<!--================Blog Area =================-->
		<section class="blog_area single-post-area py-80px section-margin--small">
			<div class="container">
				<div class="row">
					
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
									<img class="img-fluid" src="<?php bloginfo('template_directory') ?>/img/blog/feature-img1.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-3  col-md-3">
							<div class="blog_info text-right">
								<ul class="blog_meta list">
									<li>
										<a href="#"><?php echo the_author(); ?><i class="lnr lnr-user"></i></a>
									</li>
									<li>
										<a href="#"><?php echo the_date(); ?><i class="lnr lnr-calendar-full"></i></a>
									</li>
									<li>
										<a href="#">1.2M Views<i class="lnr lnr-eye"></i></a>
									</li>
									<li>
										<a href="#">06 Comments<i class="lnr lnr-bubble"></i></a>
									</li>
								</ul>
								<ul class="social-links">
									<li>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-github"></i></a>
									</li>
									<li>
										<a href="#"><i class="fab fa-behance"></i></a>
									</li>
								</ul>
							</div>
						</div>
							<div class="col-lg-9 col-md-9 blog_details">
									<h2><?php echo the_title(); ?></h2>
									<p class="excert">
										<?php the_content(); ?>
									</p>
							</div>

							<div class="col-lg-12">
									<div class="quotes">
										Копирование статей административно наказуемо.
									</div>
							</div>
					</div>
					<div class="comments-area">
							<h4>05 Comments</h4>
							<div class="comment-list">
									<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
													<div class="thumb">
															<img src="img/blog/c1.jpg" alt="">
													</div>
													<div class="desc">
															<h5>
																	<a href="#">Emilly Blunt</a>
															</h5>
															<p class="date">December 4, 2017 at 3:12 pm </p>
															<p class="comment">
																	Never say goodbye till the end comes!
															</p>
													</div>
											</div>
											<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
											</div>
									</div>
							</div>
							<div class="comment-list left-padding">
									<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
													<div class="thumb">
															<img src="img/blog/c2.jpg" alt="">
													</div>
													<div class="desc">
															<h5>
																	<a href="#">Elsie Cunningham</a>
															</h5>
															<p class="date">December 4, 2017 at 3:12 pm </p>
															<p class="comment">
																	Never say goodbye till the end comes!
															</p>
													</div>
											</div>
											<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
											</div>
									</div>
							</div>
							<div class="comment-list left-padding">
									<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
													<div class="thumb">
															<img src="img/blog/c3.jpg" alt="">
													</div>
													<div class="desc">
															<h5>
																	<a href="#">Annie Stephens</a>
															</h5>
															<p class="date">December 4, 2017 at 3:12 pm </p>
															<p class="comment">
																	Never say goodbye till the end comes!
															</p>
													</div>
											</div>
											<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
											</div>
									</div>
							</div>
							<div class="comment-list">
									<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
													<div class="thumb">
															<img src="img/blog/c4.jpg" alt="">
													</div>
													<div class="desc">
															<h5>
																	<a href="#">Maria Luna</a>
															</h5>
															<p class="date">December 4, 2017 at 3:12 pm </p>
															<p class="comment">
																	Never say goodbye till the end comes!
															</p>
													</div>
											</div>
											<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
											</div>
									</div>
							</div>
							<div class="comment-list">
									<div class="single-comment justify-content-between d-flex">
											<div class="user justify-content-between d-flex">
													<div class="thumb">
															<img src="img/blog/c5.jpg" alt="">
													</div>
													<div class="desc">
															<h5>
																	<a href="#">Ina Hayes</a>
															</h5>
															<p class="date">December 4, 2017 at 3:12 pm </p>
															<p class="comment">
																	Never say goodbye till the end comes!
															</p>
													</div>
											</div>
											<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
											</div>
									</div>
							</div>
					</div>	
					</div>

					<div class="col-lg-4">
						<div class="blog_right_sidebar">

							<aside class="single_sidebar_widget search_widget">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search Posts">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">
											<i class="lnr lnr-magnifier"></i>
										</button>
									</span>
								</div>
								<!-- /input-group -->
								<div class="br"></div>
							</aside>

							<aside class="single_sidebar_widget author_widget">
								<img class="author_img rounded-circle" src="<?php bloginfo('template_directory') ?>/img/blog/author.png" alt="">
								<h4>Charlie Barber</h4>
								<p>Senior blog writer</p>
								<div class="social_icon">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-github"></i></a>
									<a href="#"><i class="fab fa-behance"></i></a>
								</div>
								<p>	Boot camps have its supporters andit sdetractors. Some people do not understand why you should
									have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits
									detractors.
								</p>
								<div class="br"></div>
							</aside>

							<aside class="single_sidebar_widget popular_post_widget">
								<h3 class="widget_title">Popular Posts</h3>

								<div class="media post_item">
									<img src="img/blog/popular-post/post1.jpg" alt="post">
									<div class="media-body">
										<a href="single-blog.html"><h3>Space The Final Frontier</h3></a>
										<p>02 Hours ago</p>
									</div>
								</div>

								<div class="media post_item">
									<img src="img/blog/popular-post/post2.jpg" alt="post">
									<div class="media-body">
										<a href="single-blog.html"><h3>The Amazing Hubble</h3></a>
										<p>02 Hours ago</p>
									</div>
								</div>

								<div class="media post_item">
									<img src="img/blog/popular-post/post3.jpg" alt="post">
									<div class="media-body">
										<a href="single-blog.html"><h3>Astronomy Or Astrology</h3></a>
										<p>03 Hours ago</p>
									</div>
								</div>

								<div class="media post_item">
									<img src="img/blog/popular-post/post4.jpg" alt="post">
									<div class="media-body">
										<a href="single-blog.html"><h3>Asteroids telescope</h3></a>
										<p>01 Hours ago</p>
									</div>
								</div>

								<div class="br"></div>
							</aside>

							<!-- AD BANNER!!! -->
							<aside class="single_sidebar_widget ads_widget">
								<a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
								<div class="br"></div>
							</aside>

							<aside class="single-sidebar-widget newsletter_widget">
								<h4 class="widget_title">Newsletter</h4>
								<p>Here, I focus on a range of items and features that we use in life without giving them a second thought.</p>
								<div class="form-group d-flex flex-row">
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
										</div>
										<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email address" onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Enter email'">
									</div>
									<a href="#" class="bbtns">Subcribe</a>
								</div>
								<p class="text-bottom">You can unsubscribe at any time</p>
								<div class="br"></div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</section>

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

<?php } ?>