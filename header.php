<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/themify-icons/themify-icons.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/nice-select/nice-select.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/vendors/owl-carousel/owl.carousel.min.css">

<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

<style>
	.header_area {
		font-family: 'Tenor Sans';
	}
</style>

<!--================ Start Header Menu Area =================-->
<header class="header_area">
	<div class="main_menu">
	  	<nav class="navbar navbar-expand-lg navbar-light">

			<div class="container">
				<a class="navbar-brand logo_h" style="margin-right: -100;"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" alt="" style="width: 10%; height: 10%;"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<?php wp_nav_menu( [
							'theme_location'  => '',
							'menu'            => 'main_menu',
							'container'       => 'ul',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'nav navbar-nav menu_nav ml-auto mr-auto',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
							'add_li_class'    => 'nav-item',
							'add_a_class'	  => 'nav-link'
						] ); 
					?>
				</div>
			</div>
	  	</nav>
		  
	</div>
</header>
<!--================ End Header Menu Area =================-->