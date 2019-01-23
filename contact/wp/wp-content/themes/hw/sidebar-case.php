		<!--#sub-->
		<div id="sub">
			<div class="add_sidenavi01">
				<div class="midashi01">費用から選ぶ</div>
				<ul>
				<?php
$categories = get_terms( 'category', array(
    'orderby'    => 'count',
    'hide_empty' => 0,
    'child_of' => 53,
 ) );
  
    foreach($categories as $value):
 ?>
<li><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></li>
<?php endforeach; ?>
				</ul>
			</div>
			<div class="add_sidenavi01">
				<div class="midashi01">カテゴリーから選ぶ</div>
				<ul>
				<?php
$categories = get_terms( 'category', array(
    'orderby'    => 'count',
    'hide_empty' => 0,
    'child_of' => 3,
 ) );
  
    foreach($categories as $value):
 ?>
<li><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></li>
<?php endforeach; ?>
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
			<!--<div class="inner">
				<h2>リフォームのお得情報</h2>
				<p class="banner"><a href="/barrierfree_ins/"><img src="/common/img/side_img10.jpg" width="234" height="102" alt="お得な補助制度　介護保険制度"></a></p>
				<p class="banner"><a href="/barrierfree_ins/"><img src="/common/img/side_img11.jpg" width="234" height="102" alt="お得な補助制度　太陽光システム設置補助金制度"></a></p>
			</div>-->
			<p class="recruit"><a href="/recruit/"><img src="/common/img/side_img12.jpg" width="259" height="81" alt="採用情報"></a></p>
		</div>
		<!--/#sub-->
		<p class="banner-i"><a href="/contact/mail_send.php"><img src="/img/img34.png" width="1000" height="150" alt="リフォーム・外壁塗装お問い合わせ資料請求　お電話のお問い合わせ0120-88-1615営業時間：10:00～18:00"></a></p>