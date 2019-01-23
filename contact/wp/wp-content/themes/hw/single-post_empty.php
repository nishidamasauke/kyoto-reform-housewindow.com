<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/empty/">京都空き家コラム</a>　＞　</li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
		<!--section-->
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2><?php the_title(); ?></h2>
					<div class="casebox01_in clearfix">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
<div class="box">
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
			<span><a href="/column/">一覧に戻る</a></span>
				</div>
			</div>
			<!--/inner-->
		</section>
		<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar('empty'); ?>
<?php get_footer(); ?>