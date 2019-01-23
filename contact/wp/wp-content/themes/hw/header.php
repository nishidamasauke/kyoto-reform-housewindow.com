<!DOCTYPE HTML>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
	<title>マンションリフォーム・リノベーション｜ハウスウィンドウ：京都</title>
<meta property="og:title" content="京都のリフォーム工務店｜ハウスウィンドウ">
<meta property="og:type" content="website">
<meta property="og:url" content="https://housewindow.co.jp/">
<meta property="og:site_name" content="店舗・住宅リフォーム ハウスウィンドウ">
<meta property="og:description" content="リフォームの事でお困りの方、ご要望・ご質問を専任のスタッフが承ります。現地調査・お見積り後、ご納得いただいてからのご契約で安心です。戸建・マンションはもちろん店舗のリフォームも。外壁塗装、屋根塗装、キッチン・お風呂・トイレ・洗面台などの水回り、設計から施工、完成後のアフターフォローまでお任せ下さい。">
<meta property="og:image" content="https://www.housewindow.co.jp/img/ogp_img.jpg">
<meta property="fb:app_id" content="">
<?php if (is_single('')) { ?>
<meta name="robots" content="noindex" />
<?php } elseif (get_post_type() === 'qa-post' && is_single()) {?>
<?php } elseif (get_post_type() === 'post_column' && is_single()) {?>
<?php } elseif (get_post_type() === 'post_empty' && is_single()) {?>
<?php } elseif (get_post_type() === 'post_outer' && is_single()) {?>
<?php } else { ?>
<?php } ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WXL6GXQ');</script>
<!-- End Google Tag Manager -->
<link type="text/css" rel="stylesheet" href="/common/css/default.css" />
<link href="/common/css/page.css" rel="stylesheet" type="text/css" />
<link href="/common/css/wslide.css" rel="stylesheet" type="text/css" />
<link href="/common/css/droppy.css" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
<?php //カテゴリーページにMETAキーワードを挿入するとき
if ( is_category('news-info') ): //カテゴリページのとき ?>
<meta name="keywords" content="<?php echo get_meta_keyword_from_category(); ?>" />
<?php endif; ?>
<script type="text/javascript" src="/common/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/common/js/smartRollover.js"></script>
<script type="text/javascript" src="/common/js/jquery.droppy.js"></script>
<script type="text/javascript" src="/common/js/config.js"></script>
</head>
<?php
if( is_page() ){
$pageid=$post->ID;
$pageSlug = get_page($pageid)->post_name;
$cssBodyID=' id="'.$pageSlug.'"';
}else{
$cat = get_the_category();
$catslug = $cat[0]->category_nicename;
$cssBodyID=' id="'.$catslug.'"';
}
?>
<?php if (is_home()) { ?>
<body id="topics">
<?php } elseif (is_category()) { ?>
<body id="news" class="category">
<?php } elseif (is_tax('syurui')) {?>
<body id="qa" class="single">
<?php } elseif (is_tax('column_cat')) {?>
<body id="column" class="single">
<?php } elseif (is_tax('empty_cat')) {?>
<body id="empty" class="single">
<?php } elseif (is_tax('outer_cat')) {?>
<body id="empty" class="single">
<?php } elseif (is_archive()) { ?>
<body id="blog" class="archive">
<?php } elseif (is_page(array('home','toppages'))) { ?>
<body id="newhome" class="newhome">
<?php } elseif (is_page('thanks')) { ?>
<body id="entry">
<?php } elseif (is_page('outer')) { ?>
<body id="empty">
<?php } elseif (is_page()) { ?>
<body id="<?php function get_page_uri2($page_id) {$page = get_page($page_id); return $page->post_name;} ?><?php echo get_page_uri2($wp_query->post->ID);?>" >
<?php } elseif ( is_single() && get_post_type() === 'ai1ec_event') {?>
<body id="detail" class="single">
<?php } elseif ( is_single('case')) {?>
<body id="case" class="single">
<?php } elseif (get_post_type() === 'qa-post' && is_single()) {?>
<body id="qa" class="single">
<?php } elseif (get_post_type() === 'post_column' && is_single()) {?>
<body id="column" class="single">
<?php } elseif (get_post_type() === 'post_empty' && is_single()) {?>
<body id="empty" class="single">
<?php } elseif (get_post_type() === 'post_outer' && is_single()) {?>
<body id="empty" class="single">
<?php } elseif ( is_single()) {?>
<body id="news" class="single">
<?php } else { ?>
<body>
<?php } ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXL6GXQ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!--#wrapper-->
<div id="wrapper"> 
	<!--#header-->
	<header id="top-head">
		<div class="inner head-i clearfix">
<?php if (is_page(array('home','toppages'))) { ?>
			<h1 class="description">京都の住宅リフォーム会社『ハウスウィンドウ』 事例多数掲載！現地調査やお見積り（無料）はお気軽にご相談ください。</h1>
<?php } else { ?>
			<p class="description">京都のリフォームはハウスウィンドウへ。京都市リフォーム補助金のご相談もお任せ下さい！</p>
<?php } ?>
		<div class="box logobox">
				<p class="logo"><a href="/"><img src="/common/img/header_logo.png" width="290" height="48" alt="リフォーム専門店株式会社ハウスウィンドウ"></a></p>
			</div>
			<ul class="box clearfix">
				<li><img src="/common/img/header_img01.png" width="96" height="64" alt="おかげさまで京都で創業18年"></li>
				<li><a href="/case/"><img src="/common/img/header_img02.png" width="168" height="80" alt="2017年リフォーム施工実績862件"></a></li>
			</ul>
			<div class="box">
				<p class="title">リフォーム専門店</p>
				<p class="subtitle">お電話でのお問い合わせ</p>
				<p class="tel"><strong>0120-88-1615</strong>営業時間10:00～18：00</p>
			</div>
		</div>
			<div class="inner">
					<p class="contact_btn"><a href="/contact/mail_send.php" class="modal_a nopscr">お見積<br>
						お問い合わせ</a></p>
				<div id="mobile-head">
					<!--<div id="nav-toggle">
						<div> <span></span> <span></span> <span></span> </div>
					</div>-->
					<a class="nav-button" href="#">
					<span></span>
					<span></span>
					<span></span>
				  </a>
				</div>
				<nav id="global-nav">
					<ul class="clearfix">
						<li><a href="/">ホーム</a></li>
						<li><a href="/case/">リフォーム事例</a></li>
						<li><a href="/reform/">サービス紹介</a>
							<ul>
								<li><a href="/mansion-reform/">マンションリフォーム</a></li>
								<li class="lead02"><a href="/reform/">フルリフォーム<br>キャンペーン</a></li>
								<li><a href="/premiumpack/">最上級水回り４点セット</a></li>
								<li><a href="/reform_kitchen/">キッチンリフォーム</a></li>
								<li><a href="/reform_bath/">お風呂リフォーム</a></li>
								<li><a href="/reform_washstand/">洗面台リフォーム</a></li>
								<li><a href="/reform_toilet/">トイレリフォーム</a></li>
								<li><a href="/re_painting/">外壁塗装・屋根塗装</a></li>
							</ul>
						</li>
								<li class="sp-nomi"><a href="/mansion-reform/">マンションリフォーム</a></li>
								<li class="sp-nomi lead02"><a href="/reform/">フルリフォーム<br>キャンペーン</a></li>
								<li class="sp-nomi"><a href="/premiumpack/">最上級水回り４点セット</a></li>
								<li class="sp-nomi"><a href="/reform_kitchen/">キッチンリフォーム</a></li>
								<li class="sp-nomi"><a href="/reform_bath/">お風呂リフォーム</a></li>
								<li class="sp-nomi"><a href="/reform_washstand/">洗面台リフォーム</a></li>
								<li class="sp-nomi"><a href="/reform_toilet/">トイレリフォーム</a></li>
								<li class="sp-nomi"><a href="/re_painting/">外壁塗装・屋根塗装</a></li>
						<li><a href="/interview/">お客様の声</a></li>
						<li><a href="/company/">会社案内</a>
							<ul>
								<li><a href="/staff/">スタッフ紹介</a></li>
								<li><a href="/company/">会社概要・沿革・アクセス</a></li>
								<li><a href="/kodawari/">ハウスウィンドウの強み・こだわり</a></li>
								<li><a href="/recruit/" target="_blank">採用情報</a></li>
							</ul>
						</li>
								<li class="sp-nomi"><a href="/staff/">スタッフ紹介</a></li>
								<li class="sp-nomi"><a href="/company/">会社概要・沿革・アクセス</a></li>
								<li class="sp-nomi"><a href="/kodawari/">ハウスウィンドウの強み・こだわり</a></li>
								<li class="sp sp-nomi"><a href="/contact/mail_send.php">お問い合わせ</a></li>
						
					</ul>
				</nav>
			</div>
	</header>
	<!--/#header-->
<?php if (is_page(array('home','toppages'))) { ?>
<!--#visual-->
	<div id="visual">
		<div class="sp-headtel">
			<ul class="clearfix">
				<li class="title">リフォーム専門店</li>
				<li class="tel"><a href="tel:0120-88-1615" onclick="ga('send', 'event', 'tel_cv', 'click', 'header');">0120-88-1615</a></li>
			</ul>
			<ul class="clearfix">
				<li class="cach">お電話でのお問い合わせ</li>
				<li class="time">営業時間10:00～18：00</li>
			</ul>
		</div>
		<div class="inner clearfix">
			<div class="lest">
			<p class="left"><img src="img/new/visual_img01.jpg" width="740" height="440" alt="京都のリフォーム工務店"/></p>
    <h2 class="title-v"><span>全面リフォームから小規模リフォームまで費用目安と合わせ事例を多数掲載</span>住宅のリフォーム・リノベーション専門店</h2>
    <p class="leed-v">キッチン・お風呂・洗面台・トイレなど水回りはもちろん玄関から床フローリンク張替え、お部屋のフルリフォームまでご相談下さい。今の生活をより快適にグレードアップ目的のリノベーションもリフォーム専門店『ハウスウィンドウ』へ。現地調査・お見積り無料。</p>
			</div>
			<ul class="right">
				<li><a href="/mansion-reform/"><img src="img/new/visual_btn01.jpg" width="230" height="104" alt="マンションリフォーム"/></a></li>
    <li><a href="/re_painting/"><img src="img/new/visual_btn02.jpg" width="230" height="104" alt="外壁・屋根をそろそろ塗り替えませんか？"/></a></li>
    <li><a href="/premiumpack/"><img src="img/new/visual_btn03.jpg" width="230" height="104" alt="最上級水回り4点セット"/></a></li>
    <li><a href="/case/"><img src="img/new/visual_btn04.jpg" width="230" height="104" alt="リフォーム事例"/></a></li>
			</ul>
		</div>
		<div class="fcont">
   <h2><!-- <span>地域密着型</span> -->家の増改築を安心して相談できる工務店をお探しなら</h2>
   <p>お客様が安心して任せられる、地域密着型の新築・増改築を行う工務店として、18年2,000件以上の施工を行ってきました。<br>
現地調査からプラン提案や無料お見積りなど事前に行い、お客様が納得してからご発注いただいております。<br>
お住まいは長年住んでいれば傷むモノです。いざと言う時に信頼できる工務店、それが『ハウスウィンドウ』です。</p>
  </div>

		<!--syain-->
		<!--<div class="syain">
			<p class="title">株式会社ハウスウィンドウ　年末年始休業のお知らせ</p>
			<p>平素は格別のお引き立てをいただき、誠にありがとうございます。<br />
			ハウスウィンドウ 年末年始休業について下記の通りご案内申し上げます。</p>
			<p><strong>休業日：2018年12月26日(水) ～ 2019年1月5日(土) まで<br />
			<span style="font-size:1.178em;">2019年1月6日(日)より通常営業致します。</span></strong></p>
			<p>
			※ホームページからのお問い合わせに関しましても、2019年1月6日(日）以降のご連絡とさせていただきます。</p>
		</div>-->
		<!--/syain-->
	</div>
	<!--/#visual-->
<?php } elseif ( is_page('case')) {?>
<div class="title_main">
		<div class="inner">
			<h1>リフォーム（戸建・マンション）施工事例</h1>
			<p>トータルリフォームや水回り・外構など幅広いリフォームの実績をご紹介</p>
		</div>
	</div>
<?php } elseif (is_category(array('ca-case','case01','case01-a','case01-b','case01-c','case02','case02-a','case02-b','case02-c','case02-d','case03','case03-a','case03-b','case04','case04-a','case04-b','h-price','e-500','e-100','e-50','e-20','e-19'))) { ?>
<div class="title_main">
		<div class="inner">
			<h1><?php single_cat_title(); ?>施工事例</h1>
			<p>トータルリフォームや水回り・外構など幅広いリフォームの実績をご紹介</p>
		</div>
	</div>
<?php } elseif (is_category(array('news','news-info'))) { ?>
<div class="title_main">
		<div class="inner">
			<h1>お知らせ・イベント</h1>
			<p>ハウスウィンドウの最新情報をお届けします</p>
		</div>
	</div>
<?php } elseif (is_category(array('blog'))) { ?>
<div class="title_main">
		<div class="inner">
			<h1>スタッフブログ</h1>
			<p>ハウスウィンドウの日常を絶賛公開中！</p>
		</div>
	</div>
<?php } elseif (is_category('campaign')) { ?>
<div class="title_main">
		<div class="inner">
			<h1>お得情報</h1>
			<p>ハウスウィンドウのお得なキャンペーン情報をお届けします</p>
		</div>
	</div>
<?php } elseif (is_category(array('qa'))) { ?>
<div class="title_main">
		<div class="inner">
			<h1>よくある質問</h1>
			<p>お客様の疑問やお困りごとにお答えします</p>
		</div>
	</div>
<?php } elseif (get_post_type() === 'qa-post' && is_single()) { ?>
<div class="title_main">
		<div class="inner">
			<h1>よくある質問</h1>
			<p>お客様の疑問やお困りごとにお答えします</p>
		</div>
	</div>
<?php } elseif (get_post_type() === 'post_column' && is_single()) { ?>
<div class="title_main">
		<div class="inner">
			<h1>京都リフォームコラム</h1>
		</div>
	</div>
<?php } elseif (get_post_type() === 'post_empty' && is_single()) { ?>
<div class="title_main">
		<div class="inner">
			<h1>京都空き家問題コラム</h1>
		</div>
	</div>
<?php } elseif (get_post_type() === 'post_outer' && is_single()) { ?>
<div class="title_main">
		<div class="inner">
			<h1>京都外壁塗装ガイド</h1>
		</div>
	</div>
<?php } elseif ( is_page('qa')) {?>
<div class="title_main">
		<div class="inner">
			<h1>よくある質問</h1>
			<p>京都の株式会社ハウスウィンドウによせらせた新増築やリフォーム・リノベーションに関するよくある質問をご紹介。<br>
			お風呂場、トイレ、キッチンといった水まわりのリフォームのアドバイスをはじめ、リフォームローン、悪徳業者の見分け方、リファームの無料見積の内容、外壁・屋根のリフォームによる効果など、たくさんのお役立ち情報を掲載しております。新増築やリフォームをお考えの方はぜひ一度ご覧ください。<br>
			また、より詳しく知りたいお客様や掲載のないことに関するご質問は、「お問い合わせ・資料請求」ホームよりお気軽にお問い合わせください。<br>
			専門のスタッフがわかりやすく丁寧にお答えさせていただきます。</p>
			<p>お客様の疑問やお困りごとにお答えします</p>
		</div>
	</div>
<?php } elseif (is_tax('syurui')) { ?>
<div class="title_main">
		<div class="inner">
			<h1>よくある質問</h1>
			<p>お客様の疑問やお困りごとにお答えします</p>
		</div>
	</div>
<?php } elseif (is_tax('column_cat')) { ?>
<div class="title_main">
		<div class="inner">
			<h1>京都リフォームコラム</h1>
		</div>
	</div>
<?php } elseif (is_tax('empty_cat')) { ?>
<div class="title_main">
		<div class="inner">
			<h1>京都空き家問題コラム</h1>
		</div>
	</div>
<?php } elseif (is_tax('outer_cat')) { ?>
<div class="title_main">
		<div class="inner">
			<h1>京都外壁塗装ガイド</h1>
		</div>
	</div>
<?php } else { ?>
<div class="title_main">
		<div class="inner">
			<h1><?php the_title(); ?></h1>
			<p></p>
		</div>
	</div>
<?php } ?>
	<!--#cont-->
	<div id="cont" class="clearfix"> 