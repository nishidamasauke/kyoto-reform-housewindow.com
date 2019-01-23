<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/outer/">京都外壁塗装ガイド</a>　＞　</li>
				<li><?php $terms = get_the_terms($post->ID, 'outer_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></li>
			</ul>
		</div>
		<!--section-->
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2><?php $terms = get_the_terms($post->ID, 'outer_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?></h2>
					<div class="casebox01_in clearfix">
<?php query_posts($query_string ."& posts_per_page=20"); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
<div class="box">
<h2 class="tit2 mb10 info"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="categ">カテゴリー：<?php echo get_the_term_list($post->ID, 'outer_cat'); ?></p>
<div class="mb60 clearfix">

<?php echo kotoriexcerpt(200); ?>...<p class="center"><a class="link" href="<?php the_permalink(); ?>">続きを読む</a></p>

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
<?php get_sidebar('outer'); ?>
<?php get_footer(); ?>