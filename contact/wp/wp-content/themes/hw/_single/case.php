<?php
/**
* Template Name: テンプレート施工事例
*/
?>
<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<div class="pankuzu">
			<ul class="clearfix">
				<li><a href="/">HOME</a>　＞　</li>
				<li><a href="/case/">施工事例</a>　＞　</li>
				<li><?php the_title(); ?></li>
			</ul>
		</div>
		<!--section-->
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox02">
					<h2><?php the_title(); ?></h2>
					<div class="casebox02_in">
						<div class="casebox02_01 clearfix">
							<div class="main_imgbox01">
<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="casebox02_02">
						<?php if(post_custom('director')): ?>
							<h3>Director voice</h3>
							<div class="casebox02_02_in clearfix">
								<div class="textbox01">
									<div class="midashi01">
										<?php the_title(); ?>
									</div>
									<div class="text01">
										<p><?php echo post_custom('director'); ?></p>
									</div>
								</div>
								<div class="imgbox01">
									<img src="/img/<?php echo post_custom('directorstaff'); ?>.jpg" alt="" />
								</div>
							</div>
						</div>
<?php endif; ?>
						<div class="casebox02_02">
							<h3>Data</h3>
							<table>
							<?php if(post_custom('kikan')): ?>
								<tr>
									<th>工事期間</th>
									<td><?php echo post_custom('kikan'); ?></td>
								</tr>
								<?php endif; ?>
							<?php if(post_custom('nensu')): ?>
								<tr>
									<th>築年数</th>
									<td><?php echo post_custom('nensu'); ?></td>
								</tr>
								<?php endif; ?>
						<?php if(post_custom('family')): ?>
								<tr>
									<th>家族構成</th>
									<td><?php echo post_custom('family'); ?></td>
								</tr>
						<?php endif; ?>
						<?php if(post_custom('type')): ?>
								<tr>
									<th>工法・構造</th>
									<td><?php echo post_custom('type'); ?></td>
								</tr>
						<?php endif; ?>
						<?php if(post_custom('menseki')): ?>
								<tr>
									<th>面積</th>
									<td><?php echo post_custom('menseki'); ?></td>
								</tr>
						<?php endif; ?>
						<?php if(post_custom('area')): ?>
								<tr>
									<th>地域/種別</th>
									<td><?php echo post_custom('area'); ?></td>
								</tr>
						<?php endif; ?>
						<?php if(post_custom('kouzibasho')): ?>
								<tr>
									<th>工事場所</th>
									<td><?php echo post_custom('kouzibasho'); ?></td>
								</tr>
						<?php endif; ?>
						<?php if(post_custom('price')): ?>
								<tr>
									<th>工事費用</th>
									<td><?php echo post_custom('price'); ?></td>
								</tr>
						<?php endif; ?>
							</table>
							<div class="bannerbox01">
								<!--<a class="hover" href="#"><img src="img/banner01.png" alt="" /></a>-->
							</div>
						</div>
						
						<div class="casebox02_03 clearfix">
							<div class="casebox02_03_01">
								<div class="midashi01">Before</div>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou19",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou20",true),''); ?>
							</div>
							<div class="casebox02_03_02">
								<div class="midashi01">After</div>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou13",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou14",true),''); ?>
							</div>
						</div>
						<?php if(post_custom('coment')): ?>
						<div class="casebox02_02">
							<h3>Staff</h3>
							<div class="casebox02_02_in clearfix">
								<div class="textbox02">
									<div class="text01">
										<p><?php echo post_custom('coment'); ?></p>
									</div>
								</div>
								<div class="imgbox02">
									<img src="/img/<?php echo post_custom('staff'); ?>.jpg" alt="" />
								</div>
							</div>
						</div>
						<?php endif; ?>
						<div class="casebox02_01 clearfix">
							<div class="main_imgbox01">
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou15",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou16",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou17",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou18",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou25",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou26",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou27",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou28",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou29",true),''); ?>
								<?php echo wp_get_attachment_image(get_post_meta($post->ID,"gazou30",true),''); ?>
							</div>
						</div>		
								<?php $tai = get_post_meta($post->ID,"link",true); ?>
								<?php if ($tai == 'fullreform') : ?>
									<p class="link-btn"><a href="/reform/">リフォームの詳しいご案内はこちら</a></p>
								<?php elseif ($tai == 'kitchen') : ?>
									<p class="link-btn"><a href="/reform_kitchen/">キッチンフォームの詳しいご案内はこちら</a></p>
								<?php elseif ($tai == 'bath') : ?>
									<p class="link-btn"><a href="/reform_bath/">お風呂フォームの詳しいご案内はこちら</a></p>
								<?php elseif ($tai == 'senmen') : ?>
									<p class="link-btn"><a href="/reform_washstand/">洗面所フォームの詳しいご案内はこちら</a></p>
								<?php elseif ($tai == 'toilet') : ?>
									<p class="link-btn"><a href="/reform_toilet/">トイレフォームの詳しいご案内はこちら</a></p>
								<?php elseif ($tai == 'gaiheki') : ?>
									<p class="link-btn"><a href="/re_painting/">外壁塗装フォームの詳しいご案内はこちら</a></p>
								<?php endif;?>
					</div>
				</div>
			</div>
			<!--/inner-->
		</section>
		<!--/section-->
				<div class="casebox01_01 clearfix">
			<span><a href="/case/">一覧に戻る</a></span>
				</div>
		
		<!--section-->
		<section>
			<!--inner-->
			<div class="inner clearfix">
				<div class="casebox01">
					<h2 class="clearfix">おすすめ施工事例</h2>
					<div class="casebox01_in clearfix">
						<ul>
						<?php query_posts('cat=9&posts_per_page=6'); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<a class="link03" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="text01">
									地域 / 種別：<?php echo post_custom('area'); ?>
								</div>
								<a class="link02" href="<?php the_permalink(); ?>">詳細を見る</a>
							</li>
						<?php endwhile; ?>
						<?php else : ?>
							<!--item-->
							<div class="item">
								<p>表示する記事がありません</p>
							</div>
							<!--/item-->
							<?php endif; ?>
						</ul>
					</div>
				</div>
			</div>
			<!--/inner-->
		</section>
		<!--/section-->
				</div>
		<!--/#main--> 
<?php get_sidebar('case'); ?>
<?php get_footer(); ?>