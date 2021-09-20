<?php 

$pages = array(
    "page_main" 				=> 43,
    "page_shop" 				=> 139,
	"page_about"				=> 164,
	"page_contacts" 			=> 74,
	"page_privacy"  			=> 167,
	"page_public_offer"			=> 203,
	"page_FAQ"					=> 171,
	"page_shipping_and_payment" => 173,
	"page_news"					=> 0,
	"page_product_checkout"		=> 221,
	"page_redirect"				=> 223
);

$product_categories = array(
	"category_tshirts"			=> 18,
	"category_socks"			=> 19,
	"category_sweatshirts" 		=> 20,
	"category_hoodies" 			=> 21,
	"category_main_page" 		=> 23,
	"category_archive" 			=> 24
);

$page_id = get_the_ID();
$user_id = get_current_user_id();

if ( $user_id == 1 ) {

	echo 'Режим разработчика включён.';
	echo '<br>';
	echo '<b>ID текущей страницы</b>: ' . $page_id;
	echo '<br>';
	echo '<b>Список страниц</b>:';
	foreach ($pages as $i => $values) {
		echo '<p style="margin-top: 0px; margin-left: 20px; margin-bottom: 0px;">' .  $i . ' => ' . $values . '</p>';
	}
	echo '<br>';
	echo '<b>Список категорий товаров</b>:';
	echo '<br>';
	foreach ($product_categories as $i => $values) {
		echo '<p style="margin-top: 0px; margin-left: 20px; margin-bottom: 0px;">' .  $i . ' => ' . $values . '</p>';
	}

	global $wp_query;
    $loop = 'notfound';

    if ( $wp_query->is_page ) {
        $loop = is_front_page() ? 'front' : 'page';
    } elseif ( $wp_query->is_home ) {
        $loop = 'home';
    } elseif ( $wp_query->is_single ) {
        $loop = ( $wp_query->is_attachment ) ? 'attachment' : 'single';
    } elseif ( $wp_query->is_category ) {
        $loop = 'category';
    } elseif ( $wp_query->is_tag ) {
        $loop = 'tag';
    } elseif ( $wp_query->is_tax ) {
        $loop = 'tax';
    } elseif ( $wp_query->is_archive ) {
        if ( $wp_query->is_day ) {
            $loop = 'day';
        } elseif ( $wp_query->is_month ) {
            $loop = 'month';
        } elseif ( $wp_query->is_year ) {
            $loop = 'year';
        } elseif ( $wp_query->is_author ) {
            $loop = 'author';
        } else {
            $loop = 'archive';
        }
    } elseif ( $wp_query->is_search ) {
        $loop = 'search';
    } elseif ( $wp_query->is_404 ) {
        $loop = 'notfound';
    }

	if ( $loop == 'single' ) {

		$post_type = get_post_type(); 
		if ($post_type = "product") {
			global $product; 
			$product_id = $product->get_id();
			$product_name = get_the_title();

			echo '<br>';
			echo '<b>ID текущего товара</b>: ' . $product_id;
			echo '<br>';
			echo '<b>Название текущего товара</b>: ' . $product_name;
			echo '<br>';
			echo '<b>ID категории текущего товара</b>: N/A';
		}

	}

}
if ( $page_id == 43 ) {
	get_header(); 
	get_template_part( 
		$slug = "template-parts/main_page", 
		$name, 
		$args = "Us which over of signs divide dominion deep fill bring they're meat beho upon own earth without morning over third. Their male dry. They are great appear whose land fly grass."
	);
	get_footer(); 

} elseif ( $page_id == 139 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/shop", 'category'
	);
	get_footer(); 

} elseif ( $page_id == 164 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/blog"
	);
	get_footer(); 

} elseif ( $page_id == 74 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/contacts"
	);
	get_footer(); 

} elseif ( $page_id == 167 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/privacy"
	);
	get_footer(); 

} elseif ( $page_id == 203 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/offer"
	);
	get_footer(); 

} elseif ( $page_id == 171 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/faq"
	);
	get_footer(); 

} elseif ( $page_id == 173 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/shipping"
	);
	get_footer(); 

} elseif ( $page_id == 221 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/product_checkout"
	);
	get_footer(); 

} elseif ( $page_id == 223 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/redirect"
	);
	get_footer(); 

} else {

	get_header(); 
	the_post(); 
	the_content(); 
	get_footer(); 
}

?>
