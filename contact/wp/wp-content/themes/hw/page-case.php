<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li>リフォーム施工事例</li>
			</ul>
		</div>
		<!--section-->
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2>最新のリフォーム（戸建）・外壁塗装施工事例</h2>
					<div class="casebox01_in clearfix">
						<ul>
			<?php query_posts('cat=3&posts_per_page=42&paged='.$paged); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a class="link01" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="text01">
									地域 / 種別：<?php echo post_custom('area'); ?>
								</div>
								<a class="link02" href="<?php the_permalink(); ?>">詳細を見る</a>
							</li>
			<?php endwhile; ?>
			<?php else : ?>
			<!--section-->
							<li>
								表示する記事がありません
							</li>
			<?php endif; ?>
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
<?php get_sidebar('case'); ?>
<?php get_footer(); ?>