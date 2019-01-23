<?php get_header(); ?>
<?php
	$category = get_the_category();
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/case/">リフォーム施工事例</a>　＞　</li>
				<li>50万円以下</li>
			</ul>
		</div>
		<!--section-->
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2>50万円～99万円</h2>
					<div class="casebox01_in clearfix">
						<ul>
			<?php query_posts('cat=55&posts_per_page=21&paged='.$paged); ?>
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