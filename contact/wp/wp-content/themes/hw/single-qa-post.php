<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/qa/">よくある質問</a></li>
			</ul>
		</div>
		<!--section-->
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2>よくある質問</h2>
					<div class="casebox01_in clearfix">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
<div class="box">

<h2 class="tit2 mb10 info"><?php the_title(); ?></h2>
<div class="mb60 clearfix">

<?php the_content(); ?>

</div>
</div>

		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
</div>
				</div>
				<div class="casebox01_01 clearfix">
			<span><a href="/qa/">一覧に戻る</a></span>
				</div>
			</div>
			<!--/inner-->
		</section>
		<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar('qa'); ?>
<?php get_footer(); ?>