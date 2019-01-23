<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/qa/">よくある質問</a>　＞　</li>
				<li><?php echo get_the_term_list($post->ID, 'syurui'); ?></li>
			</ul>
		</div>
		<!--section-->
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2><?php echo get_the_term_list($post->ID, 'syurui'); ?></h2>
					<div class="casebox01_in clearfix">
<?php query_posts($query_string ."& posts_per_page=5"); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
<div class="box">
<p class="categ">カテゴリー：<?php echo get_the_term_list($post->ID, 'syurui'); ?></p>
<h2 class="tit2 mb10 info"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="mb60 clearfix">

<?php the_content(); ?>

</div>
</div>
<?php endwhile; endif; ?>

<p>&nbsp;</p>
<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
						</ul>
					</div>
				</div>
				<div class="casebox01_01 clearfix">
				<?php
//Pagenation 
if (function_exists("pagination")) {
	pagination($additional_loop->max_num_pages);
}
?>
				</div>
			</div>
			<!--/inner-->
		</section>
		<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar('qa'); ?>
<?php get_footer(); ?>