<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/news-info/">ニュース</a>　＞　</li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
		<!--section-->
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox02 news-info">
			<?php query_posts('cat=26&posts_per_page=5&paged='.$paged); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="item">
					<p class="time"><?php the_time("Y.m.j") ?></p>
					<?php the_content(); ?>
					</div>
			<?php endwhile; ?>
			<?php else : ?>
					<p>表示する記事がありません</p>
				<?php endif; ?>
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
		</section>
		<!--/section-->
				</div>
		<!--/#main--> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>