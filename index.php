<?php

$pages = get_pages();
foreach( $pages as $page ){
	echo $page->ID . '<br>';
}