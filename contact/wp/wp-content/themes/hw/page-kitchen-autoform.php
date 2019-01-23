<?php get_header(); ?>
		<!--#main-->
		<div id="main">
			<div class="pankuzu">
				<ul class="clearfix">
					<li><a href="/">HOME</a>　＞　</li>
					<li><a href="/reform_kitchen/">キッチンリフォーム</a>　＞　</li>
					<li>キッチンリフォーム 自動見積もりフォーム</li>
				</ul>
			</div>
			<!--section-->
			<section class="form">
				<p class="ddd">zidou</p>
				<!--inner-->
				<div class="inner clearfix">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
				</div>
				<!--/inner-->
			</section>
			<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>