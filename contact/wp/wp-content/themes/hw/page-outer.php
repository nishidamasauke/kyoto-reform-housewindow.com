<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li>京都外壁塗装ガイド</li>
			</ul>
		</div>
		<!--section-->
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2>京都外壁塗装ガイド</h2>
					<div class="casebox01_in clearfix">
		  <?php
//$paged = get_query_var('paged') ? get_query_var('paged') : 1;
//query_posts("post_type=press&posts_per_page=5&paged=$paged");

?>
       <?php //if(have_posts()): while(have_posts()): the_post() ?>
		    <?php
      $args = array(
      'paged' => $paged,
      'posts_per_page' => 20,// 1ページに表示する件数を指定 /
	  'post_type' => 'post_outer',
      ); ?>
    <?php query_posts( $args ); ?>
   <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); 
   // ループ開始 / ?>
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