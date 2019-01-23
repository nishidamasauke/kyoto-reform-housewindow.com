<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/outer/">京都外壁塗装ガイド</a>　＞　</li>
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
<div class="box">
<div class="mb60 clearfix">

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
<?php the_content(); ?>

		<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
		<p><a href="/re_painting/">京都ハウスウィンドウの外壁塗装コンテンツはこちら！</a></p>
</div>
</div>
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
					<h2>外壁塗装お役立ちコンテンツ</h2>
					<div class="casebox01_in">
						<div class="box">
							<div class="mb60">
								<?php
								 global $post;
								//$term = array_shift(get_the_terms($post->ID, 'faq'));
								 $term = array_shift(get_the_terms($post->ID, 'outer_cat')); // タクソノミー名を指定する
								 $args = array(
								  'numberposts' => 8, //８件表示(デフォルトは５件)
								  'post_type' => 'post_outer', //カスタム投稿タイプ名
								  'taxonomy' => 'outer_cat', //タクソノミー名 ←ここが追加
								  'term' => $term->slug, //ターム名
								  'orderby' => 'rand', //ランダム表示
								  'post__not_in' => array($post->ID) //表示中の記事を除外
								 );
								?>
								<?php $myPosts = get_posts($args); if($myPosts) : ?>
								<?php foreach($myPosts as $post) : setup_postdata($post); ?>
								 <p class="kannrenn"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
								<?php endforeach; ?>
								<?php else : ?>
								 <p>関連アイテムはまだありません。</p>
								<?php endif; wp_reset_postdata(); ?>
								 <!--ここまで-->
							</div>
						 </div>
					 </div>
				</div>
			</div>
		</section>
		<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar('outer'); ?>
<?php get_footer(); ?>