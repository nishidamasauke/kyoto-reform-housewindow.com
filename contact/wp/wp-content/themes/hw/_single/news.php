<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/category/news/news-info/">ニュース</a>　＞　</li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
		<!--section-->
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox02 news-info">
					<h2><?php the_title(); ?></h2>
					<div class="item">
					<p class="time"><?php the_time("Y.m.j") ?></p>
					<?php if(have_posts()):while(have_posts()):the_post(); ?>
　<?php the_content(); ?>
<?php endwhile;endif; ?>
</div>
				</div>
				<div class="casebox01_01 clearfix">
			<span><a href="/category/news/news-info/">一覧に戻る</a></span>
				</div>
			</div>
		</section>
		<!--/section-->
				</div>
		<!--/#main--> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>