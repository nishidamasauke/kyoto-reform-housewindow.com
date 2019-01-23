<?php get_header(); ?>
<!--#main-->
		<div id="main"> <!--topic-->
			<div class="topic">
				<ul class="clearfix topicpass">
					<li><a href="/">リサイクルDoのTop</a><span>&gt;</span></li>
					<li><a href="/wp/voice/">お客様の声</a><span>&gt;</span></li>
					<li><?php the_title(); ?></li>
				</ul>
			</div>
			<!--topic-->
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); 
			/* ループ開始 */ ?>
			<!--section-->
			<section class="article">
				<p class="h1d"><?php the_title(); ?></>
				<div class="inner clearfix">
					<div class="blog-content clearfix">
					<?php the_content(); ?>
					</div>
				</div>
			</section>
			<!--/section--> 
			<?php endwhile; ?>
			<?php else : ?>
			<!--section-->
			<section>
				<h2>記事がありません</h2>
				<div class="section-cont clearfix">
					<p>表示する記事はありませんでした。</p>
				</div>
			</section>
			<!--/section--> 
			<?php endif; ?>
			
			<!-- #pager -->
			<div id="pager" class="clearfix">
				<span class="nav-prev"><?php previous_post_link( '%link', __( '<span class="meta-nav">＜＜</span> 前の記事へ') ); ?></span>
				<a href="/wp/voice/">一覧へ戻る</a>
				<span class="nav-next"><?php next_post_link( '%link', __( '次の記事へ <span class="meta-nav">＞＞</span>') ); ?></span>
			</div>
			<!-- /#pager -->
			<!--section-->
			<section class="inquiry">
				<!--inner-->
				<div class="inner">
					<p class="opacity"><a href="/inquiry/mail_send.php"><img src="/common/img/banner_inquiry01.png" width="710" height="160" alt="お見積り・相談無料、フリーダイヤル遺品整理・不動産処理なら0120-306-626[営業時間]10:00～18:00定休日：水曜　まずはお気軽にお問合せ下さい　メールお問い合わせ年中無休・24時間受付"></a></p>
				</div>
				<!--/inner-->
			</section>
		<!--/section--> </div>
		<!--/#main--> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>
