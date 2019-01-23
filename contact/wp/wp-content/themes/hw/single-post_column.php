<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/column/">京都リフォームコラム</a>　＞　</li>
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
					<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php if (has_post_thumbnail()) : ?>
						<p><?php the_post_thumbnail('full'); ?></p>
    <?php else : ?>
    <?php endif ; ?>
<?php endwhile; endif; ?>
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
		<!--section-->
		<section>
			<div class="inner">
				<div class="casebox01">
					<h2>関連記事</h2>
					<div class="casebox01_in">
						<div class="box">
							<div class="mb60">
								<?php
yarpp_related(array(
'post_type' => 'post_column'
));?>
							</div>
						 </div>
					 </div>
				</div>
			</div>
		</section>
		<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar('column'); ?>
<?php get_footer(); ?>