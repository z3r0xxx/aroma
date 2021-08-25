<?php 

$pages = array(
    "page_main" 	=> 43,
    "page_shop" 	=> 139,
	"blog_page"		=> 164,
	"page_contacts" => 74,
);

$page_id = get_the_ID();
echo ''.$page_id;
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

} elseif ( $page_id == 74 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/contacts"
	);
	get_footer(); 

} elseif ( $page_id == 164 ) {

	get_header(); 
	get_template_part( 
		$slug = "template-parts/blog"
	);
	get_footer(); 

} else {

	get_header(); 
	the_post(); 
	the_content(); 
	get_footer(); 
}

?>
