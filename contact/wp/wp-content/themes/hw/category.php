<?php get_header(); ?>
<!--#main-->
		<div id="main"> <!--topic-->
				<!--section-->
			<section class="visual">
				<div class="visual-cont">
					<h2>News</h2>
				</div>
				<!--inner-->
				<div class="pankuzu">
					<p><a href="/">HOME</a>　>　
					<a href="/news/">新着情報</a>　>　
					<?php the_category(', '); ?>
					</p>
				</div>
				<!--/inner-->
			</section>
			<!--/section-->
			<!--section-->
			<section class="article">
				<h2><?php the_category(', '); ?></h2>
			<?php
				$args = array(
				'paged' => $paged,
			); ?>
			<?php query_posts( $args ); ?>
			<?php query_posts($query_string ."& posts_per_page=5"); ?>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
				<div class="inner clearfix">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p class="date"><?php the_time("Y年m月j日") ?></p>
					<div class="blog-content clearfix">
					<?php the_content(); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<!--section-->
				<div class="inner clearfix">
					<h3>記事がありません</h3>
					<p>表示する記事はありませんでした。</p>
				</div>
			<?php endif; ?>
			</section>
			<!--/section--> 
			<!-- #pager -->
			<div id="pager" class="clearfix">
				<span class="nav-prev"><?php previous_posts_link('<span class="meta-nav">＜＜</span> 前の記事へ'); ?></span>
				<span class="nav-next"><?php next_posts_link('次の記事へ <span class="meta-nav">＞＞</span>'); ?></span>
			</div>
			<!-- /#pager -->
			<!--section-->
			<section>
				<!--inner-->
				<div class="inner clearfix">
				</div>
				
				<!--/inner-->
			</section>
			<!--/section--> </div>
		<!--/#main--> 
<?php get_footer(); ?>