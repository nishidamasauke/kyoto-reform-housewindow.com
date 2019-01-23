<?php get_header(); ?>
<?php 
	$page_info = get_page_by_path('recruit');
	$page = get_post($page_info);
	echo $page->post_content;
?>
<?php get_footer(); ?>