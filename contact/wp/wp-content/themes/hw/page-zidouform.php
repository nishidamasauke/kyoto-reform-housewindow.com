<?php get_header(); ?>
		<!--#main-->
		<div id="main">
			<div class="pankuzu">
				<ul class="clearfix">
					<li><a href="/">HOME</a>　＞　</li>
					<li>自動見積もりフォーム</li>
				</ul>
			</div>
			<!--section-->
			<section class="form">
				<h2>自動見積もりフォーム</h2>
				<!--inner-->
				<!--<div class="inner clearfix">
					<p class="strong">無料・資料請求はお問い合わせフォームよりご依頼下さい</p>
					<p>ご質問、ご相談や、資料請求・来場予約などがございましたら下記のお問い合わせフォームよりお気軽にご連絡くださいませ。<br>
					折り返し、担当よりご連絡いたします。</p>
					<p><strong>※は必須項目</strong>となります。</p>
					<div class="tel">
						<p class="title">お電話でのお問い合わせ</p>
						<p class="tell">0120-88-1615</p>
						<p>営業時間：10:00～18:00</p>
					</div>
				</div>-->
				<!--/inner-->
				<!--inner-->
				<div class="inner clearfix">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
				</div>
				<!--/inner-->
			</section>
			<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>