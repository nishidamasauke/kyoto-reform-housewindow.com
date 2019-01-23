		<!--#sub-->
		<div id="sub">
		<div class="add_sidenavi01">
				<div class="midashi01">カテゴリー</div>
				<ul>
		<?php wp_list_categories('title_li=&taxonomy=outer_cat'); ?>
				</ul>
			</div>
			<div class="inner">
				<h2>チラシ情報</h2>
				<p class="icon"><img src="/common/img/side_icon01.png" width="53" height="48" alt="最新リフォームチラシ"></p>
				<p class="img opacity"><a href="/common/pdf/chirashi.pdf" target="_blank"><img src="/common/img/side_img01.jpg" width="229" height="251" alt="毎月１日更新　お得な情報をお届け！"></a></p>
			</div>
			<div class="inner">
				<h2>アクセス情報</h2>
				<p><strong>【向日市ステーションパーク店】</strong><br>
					京都府向日市鶏冠井町西金村5<br>
					向日市ステーションパーク1F</p>
				<p class="map">
					<iframe 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.5218811637756!2d135.7151181513824!3d34.9435261802766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600105b58b5bc42b%3A0xe61b9439927a8438!2z5qCq5byP5Lya56S-44OP44Km44K544Km44Kj44Oz44OJ44Km!5e0!3m2!1sja!2sjp!4v1525162207008" 
width="200" height="200" frameborder="0" style="border:0" 
allowfullscreen></iframe>
				</p>
				<p><strong>【Home Style Renovation】</strong><br>
					〒612-8394<br>
					京都市伏見区下鳥羽西芹川町52</p>
				<p class="map">
					<iframe 
src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26164.175458321773!2d135.69974899016287!3d34.94352489843075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600105c9226a5df9%3A0x5bcf6d6acf13bc83!2zSG9tZSBTdHlsZSBSZW5vdmF0aW9u44CQ44OP44Km44K544Km44Kk44Oz44OJ44Km44CR!5e0!3m2!1sja!2sjp!4v1525161825383" 
width="200" height="200" frameborder="0" style="border:0" 
allowfullscreen></iframe>
				</p>
			</div>
			<div class="inner">
				<h2 class="midashi01">自動お見積りフォーム</h2>
				<ul class="autoform">
					<li><a href="/gaiheki-autoform/">外壁塗装</a></li>
					<li><a href="/kitchen-autoform/">キッチンリフォーム</a></li>
					<li><a href="/bath-autoform/">お風呂リフォーム</a></li>
				</ul>
			</div>
			<div class="inner">
				<p class="banner"><a href="/reform/painting/"><img src="/common/img/side_img02.jpg" width="234" height="85" alt="エコ外壁塗装　新築のように生まれ変わる"></a></p>
				<p class="banner"><a href="/925/"><img src="/common/img/side_img03.jpg" width="234" height="85" alt="水回りセット　まとめてリフォーム　選べるオプション付き"></a></p>
			</div>
			
		<div class="add_sidenavi01">
				<div class="midashi01">コラム</div>
				<ul>
					<li><a href="/column/">京都リフォームコラム</a></li>
					<li><a href="/empty/">空き家問題コラム</a></li>
					<li><a href="/outer/">京都外壁塗装ガイド</a></li>
				</ul>
			</div>
			<div class="inner access">
				<h2>アクセスランキング</h2>
				<?php
// views post metaで記事のPV情報を取得する
setPostViews(get_the_ID());

// ループ開始
query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=3&order=DESC'); while(have_posts()) : the_post(); ?>
<div class="item">
					<h3>位</h3>
					<p class="img"><a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'post-thumbnail'); } ?></a></p>
					<p class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></p>
				</div>
<?php endwhile; ?>
</div>
			<div class="inner news">
				<h2>お知らせ・イベント</h2>
			<?php query_posts('cat=26&posts_per_page=5'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="item clearfix">
					<p class="img"><a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
	the_post_thumbnail();
}else {
	echo '<img src="'.'/common/img/side_img07.jpg' . '" width="65" height="65" alt="thumbnail" />';
} ?></a></p>
					<dl>
						<dd><?php the_time("Y.m.j") ?></dd>
						<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
					</dl>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
				<!--item-->
				<div class="item">
					<p>表示する記事がありません</p>
				</div>
				<!--/item-->
				<?php endif; ?>
				<p class="btn"><a href="/category/news/news-info/">その他のお知らせを見る</a></p>
			</div>
			<div class="inner news">
				<h2>スタッフブログ</h2>
				
				<?php query_posts('cat=25&posts_per_page=5'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="item clearfix">
					<p class="img"><a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
	the_post_thumbnail();
}else {
	echo '<img src="'.'/common/img/side_img07.jpg' . '" width="65" height="65" alt="thumbnail" />';
} ?></a></p>
					<dl>
						<dd><?php the_time("Y.m.j") ?></dd>
						<dt><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dt>
					</dl>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
				<!--item-->
				<div class="item">
					<p>表示する記事がありません</p>
				</div>
				<!--/item-->
				<?php endif; ?>
				<p class="btn"><a href="/category/news/blog/">その他のお知らせを見る</a></p>
			</div>
			<!--<div class="inner">
				<h2>リフォームのお得情報</h2>
				<p class="banner"><a href="/barrierfree_ins/"><img src="/common/img/side_img10.jpg" width="234" height="102" alt="お得な補助制度　介護保険制度"></a></p>
				<p class="banner"><a href="/barrierfree_ins/"><img src="/common/img/side_img11.jpg" width="234" height="102" alt="お得な補助制度　太陽光システム設置補助金制度"></a></p>
			</div>-->
			<p class="recruit"><a href="/recruit/"><img src="/common/img/side_img12.jpg" width="259" height="81" alt="採用情報"></a></p>
		</div>
		<!--/#sub-->
		<p class="banner-i"><a href="/contact/mail_send.php"><img src="/img/img34.png" width="1000" height="150" alt="リフォーム・外壁塗装お問い合わせ資料請求　お電話のお問い合わせ0120-88-1615営業時間：10:00～18:00"></a></p>