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
					<?php the_title(); ?>
					</p>
				</div>
				<!--/inner-->
			</section>
			<!--/section-->
			<!--section-->
			<section class="article">
				<h2>新着情報</h2>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
				<div class="inner clearfix">
					<h3><?php the_title(); ?></h3>
					<div class="blog-content clearfix">
					<?php the_content(); ?>
					</div>
				</div>
			<!--/section--> 
			<?php endwhile; ?>
			<?php else : ?>
				<h2>記事がありません</h2>
				<div class="inner clearfix">
					<p>表示する記事はありませんでした。</p>
				</div>
			<?php endif; ?>
			</section>
			<!--/section--> 
			<!-- #pager -->
			<div id="pager" class="clearfix">
				<span class="nav-prev"><?php previous_post_link( '%link', __( '<span class="meta-nav">＜＜</span> 前の記事へ') ); ?></span>
				<a href="/news/">一覧へ戻る</a>
				<span class="nav-next"><?php next_post_link( '%link', __( '次の記事へ <span class="meta-nav">＞＞</span>') ); ?></span>
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