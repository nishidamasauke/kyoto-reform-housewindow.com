<?php is_front_page(); ?>
<?php get_header(); ?>
		<!--#main-->
		<div id="main"> 
		<!--section-->
		<section class="case">
			<h2>リフォーム事例</h2>
			<!--inner-->
			<div class="inner clearfix">
				<h3><a href="https://housewindow.co.jp/reform/">フルリフォーム</a></h3>
				<!--//カテゴリーIDが「9」で表示件数が「3記事」の場合-->
			<?php query_posts('cat=9&posts_per_page=3'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!--item-->
				<div class="item">
					<p class="img opacity"><a href="<?php the_permalink(); ?>">
					<?php
						$title= 'フルリフォーム';
						the_post_thumbnail(array( 300,99999 ),
						array( 'alt' =>$title, 'title' => $title)); 
						?></a></p>
					<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<dl>
						<dt>地域 / 種別：<?php echo post_custom('area'); ?></dt>
						<dd><?php echo mb_substr((post_custom('coment')),0,30); ?>…</dd>
						</dl>
					<p class="btn"><a href="<?php the_permalink(); ?>">詳細を見る</a></p>
					</div>
				<!--/item-->
			<?php endwhile; ?>
			<?php else : ?>
				<!--item-->
				<div class="item">
					<p>表示する記事がありません</p>
				</div>
				<!--/item-->
				<?php endif; ?>
				</div>
			<!--/inner-->
			<p class="other"><a href="/case/">その他の事例を見る</a></p>
			<!--inner-->
			<div class="inner clearfix">
				<h3><a href="https://housewindow.co.jp/reform_kitchen/">トイレ・キッチン・お風呂・洗面台リフォーム</a></h3>
				<!--//カテゴリーIDが「9」で表示件数が「3記事」の場合-->
			<?php query_posts('cat=4&posts_per_page=3'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!--item-->
				<div class="item">
					<p class="img opacity"><a href="<?php the_permalink(); ?>"><?php
$title= '水回りリフォーム';
the_post_thumbnail(array( 300,99999 ),
array( 'alt' =>$title, 'title' => $title)); 
?></a></p>
					<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<dl>
						<dt>地域 / 種別：<?php echo post_custom('area'); ?></dt>
						<dd><?php echo mb_substr((post_custom('coment')),0,30); ?>…</dd>
						</dl>
					<p class="btn"><a href="<?php the_permalink(); ?>">詳細を見る</a></p>
					</div>
				<!--/item-->
			<?php endwhile; ?>
			<?php else : ?>
				<!--item-->
				<div class="item">
					<p>表示する記事がありません</p>
				</div>
				<!--/item-->
				<?php endif; ?>
				</div>
			<!--/inner-->
			<p class="other"><a href="/category/ca-case/case02/">その他の事例を見る</a></p>
			<!--inner-->
			<div class="inner clearfix">
				<h3>外構・エクステリア</h3>
				<!--//カテゴリーIDが「9」で表示件数が「3記事」の場合-->
			<?php query_posts('cat=13&posts_per_page=3'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!--item-->
				<div class="item">
					<p class="img opacity"><a href="<?php the_permalink(); ?>"><?php
$title= '外構・エクステリアリフォーム';
the_post_thumbnail(array( 300,99999 ),
array( 'alt' =>$title, 'title' => $title)); 
?></a></p>
					<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<dl>
						<dt>地域 / 種別：<?php echo post_custom('area'); ?></dt>
						<dd><?php echo mb_substr((post_custom('coment')),0,30); ?>…</dd>
						</dl>
					<p class="btn"><a href="<?php the_permalink(); ?>">詳細を見る</a></p>
					</div>
				<!--/item-->
			<?php endwhile; ?>
			<?php else : ?>
				<!--item-->
				<div class="item">
					<p>表示する記事がありません</p>
				</div>
				<!--/item-->
				<?php endif; ?>
				</div>
			<!--/inner-->
			<p class="other"><a href="/category/ca-case/case03/">その他の事例を見る</a></p>
			<!--inner-->
			<div class="inner clearfix">
				<h3><a href="https://housewindow.co.jp/re_painting/">屋根・外壁塗装</a></h3>
				<!--//カテゴリーIDが「9」で表示件数が「3記事」の場合-->
			<?php query_posts('cat=11&posts_per_page=3'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!--item-->
				<div class="item">
					<p class="img opacity"><a href="<?php the_permalink(); ?>"><?php
$title= '屋根・外壁塗装リフォーム';
the_post_thumbnail(array( 300,99999 ),
array( 'alt' =>$title, 'title' => $title)); 
?></a></p>
					<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
					<dl>
						<dt>地域 / 種別：<?php echo post_custom('area'); ?></dt>
						<dd><?php echo mb_substr((post_custom('coment')),0,30); ?>…</dd>
						</dl>
					<p class="btn"><a href="<?php the_permalink(); ?>">詳細を見る</a></p>
					</div>
				<!--/item-->
			<?php endwhile; ?>
			<?php else : ?>
				<!--item-->
				<div class="item">
					<p>表示する記事がありません</p>
				</div>
				<!--/item-->
				<?php endif; ?>
				</div>
			<!--/inner-->
			<p class="other"><a href="/category/ca-case/case04/">その他の事例を見る</a></p>
		</section>
		<!--/section-->
		<!--section-->
		<section class="case handling">
			<h2>取扱リフォーム一覧</h2>
			<!--inner-->
			<div class="inner clearfix">
				<!--item-->
				<div class="item">
				  <p class="title"><a href="/reform/">フルリフォーム</a></p>
					<p class="img opacity"><a href="/reform/"><img src="/img/handling_img01.jpg" width="198" height="132" alt="フルリフォーム"/></a></p>
					<p class="cont">住宅全体をまるで新築のように仕上げるフルリフォーム。築30年以上の住宅・マンションでも、お客様の理想を実現します。</p>
					<h4>フルリフォームでよくあるお悩み</h4>
					<ul>
						<li>LDKが狭い、広げたい</li>
						<li>家全体に収納が少ない</li>
						<li>階段の傾斜が大きい</li>
					</ul>
					<p class="btn"><a href="/reform/">詳細を見る</a></p>
			  </div>
				<!--/item-->
				<!--item-->
				<div class="item">
				  <p class="title"><a href="/reform_kitchen/">キッチンリフォーム</a></p>
					<p class="img opacity"><a href="/reform_kitchen/"><img src="/img/handling_img02.jpg" width="198" height="132" alt="キッチンリフォーム"/></a></p>
					<p class="cont">毎日使うキッチンは使いやすく清潔なのが一番。デザインにもこだわれば、お料理の時間をより楽しく彩ってくれます。</p>
					<h4>キッチンリフォームでよくあるお悩み</h4>
					<ul>
						<li>収納しにくい、収納が少ない</li>
						<li>掃除しにくい</li>
						<li>狭く使いにくい</li>
					</ul>
					<p class="btn"><a href="/reform_kitchen/">詳細を見る</a></p>
			  </div>
				<!--/item-->
				<!--item-->
				<div class="item">
				  <p class="title"><a href="/reform_bath/">お風呂リフォーム</a></p>
					<p class="img opacity"><a href="/reform_bath/"><img src="/img/handling_img03.jpg" width="198" height="132" alt="お風呂リフォーム"/></a></p>
					<p class="cont">ゆったり快適なリラックスタイムを過ごせるお風呂へリフォーム。バリアフリーを考慮したデザインで、長く使えるお風呂に変身させましょう。</p>
					<h4>お風呂リフォームでよくあるお悩み</h4>
					<ul>
						<li>タイルが剥がれている</li>
						<li>浴室内が寒い</li>
						<li>段差が大きい</li>
					</ul>
					<p class="btn"><a href="/reform_bath/">詳細を見る</a></p>
			  </div>
				<!--/item-->
				<!--item-->
				<div class="item">
				  <p class="title"><a href="/reform_washstand/">洗面台リフォーム</a></p>
					<p class="img opacity"><a href="/reform_washstand/"><img src="/img/handling_img04.jpg" width="198" height="132" alt="洗面台リフォーム"/></a></p>
					<p class="cont">仕事に行く前、家に帰ってから、歯磨きの時…一日に何度も使う洗面台。使い勝手や収納、デザインなどこだわってみては？</p>
					<h4>洗面台リフォームでよくあるお悩み</h4>
					<ul>
						<li>収納が少ない</li>
						<li>洗面ボール（手洗い鉢）が割れている</li>
						<li>汚れが落ちない（汚くなってきた）</li>
					</ul>
					<p class="btn"><a href="/reform_washstand/">詳細を見る</a></p>
			  </div>
				<!--/item-->
				<!--item-->
				<div class="item">
				  <p class="title"><a href="/reform_toilet/">トイレリフォーム</a></p>
					<p class="img opacity"><a href="/reform_toilet/"><img src="/img/handling_img05.jpg" width="198" height="132" alt="トイレリフォーム"/></a></p>
					<p class="cont">家族だけでなく来客も使うトイレ。快適で清潔、省エネな空間にするためご提案しております。高齢者に優しいバリアフリーも承っています。</p>
					<h4>トイレリフォームでよくあるお悩み</h4>
					<ul>
						<li>水漏れしている</li>
						<li>節水可能なタイプにしたい</li>
						<li>便器が汚れている</li>
					</ul>
					<p class="btn"><a href="/reform_toilet/">詳細を見る</a></p>
			  </div>
				<!--/item-->
				<!--item-->
				<div class="item">
				  <p class="title"><a href="/re_painting/">外壁塗装・屋根塗装</a></p>
					<p class="img opacity"><a href="/re_painting/"><img src="/img/handling_img06.jpg" width="198" height="132" alt="外壁塗装・屋根塗装"/></a></p>
					<p class="cont">外壁や屋根は劣化を放置すると住宅の寿命を縮める原因となってしまいます。耐久性・耐水性を取り戻しましょう。</p>
					<h4>外壁塗装・屋根塗装でよくあるお悩み</h4>
					<ul>
						<li>塗膜が剥がれている</li>
						<li>雨漏りしている</li>
						<li>苔や藻、汚れが気になる</li>
					</ul>
					<p class="btn"><a href="/re_painting/">詳細を見る</a></p>
			  </div>
				<!--/item-->
				</div>
			<!--/inner-->
		</section>
		<!--/section-->
		<!--section-->
		<section class="value">
			<h2>京都のリフォームの特徴</h2>
			<!--inner-->
			<div class="inner">
				<p>京都では家と家の距離が近いことが特徴のひとつで、エリアによって異なりますが、景観地区では建物の高さ・屋根の色や形・勾配の角度・壁の色や材質などに制限があります。外壁塗装の際、横面に塗装できないといったケースも多くありますが、ハウスウィンドウではそういったケースも数多く実績がございますので、お気軽にご相談ください。</p>
				</div>
			<!--/inner-->
		</section>
		<!--/section-->
			<!--section-->
		<section class="box">
			<!--inner-->
			<div class="inner">
				<h2>京都でリフォームするならハウスウィンドウ<br>
				創業10年、施工実績800件以上！</h2>
				<p class="img"><img src="/common/img/img01.jpg" width="671" height="153" alt="お客さまの「家」への想いをカタチにするために、丁寧にご要望をお聞きします。"></p>
				<p class="body">ハウスウィンドウは京都府内を中心とするエリアで、キッチン・お風呂・トイレなどの各種リフォームや外壁塗装を手がけるリフォーム専門店です。</p>
				</div>
			<!--/inner-->
			<!--inner-->
			<div class="inner reason">
				<h3>ハウスウィンドウの3つの強み</h3>
				<!--item-->
				<div class="item clearfix">
					<p class="img"><img src="/img/img02.jpg" width="161" height="163" alt="自社一貫施工"></p>
					<h4>自社一貫施工</h4>
					<p>プラン設計・材料選び・施工など全て一貫して行なうことで、お客様のご希望に寄り添ったリフォームを実現しています。下請け業者に任せることはないため、その分お客様のご負担額を抑えられます。</p>
					</div>
				<!--/item-->
				<!--item-->
				<div class="item clearfix">
					<p class="img"><img src="/img/img03.jpg" width="161" height="164" alt="地域密着"></p>
					<h4>地域密着</h4>
					<p>京都府向日市が拠点のハウスウィンドウは地域密着であることを大切にしていますので、近隣の方への配慮を心がけています。</p>
					</div>
				<!--/item-->
				<!--item-->
				<div class="item clearfix">
					<p class="img"><img src="/img/img04.jpg" width="161" height="164" alt="担当スタッフの一貫対応"></p>
					<h4>完成後のアフターフォローに注力</h4>
					<p>担当スタッフがヒアリングから完成まで一貫してご対応します。お客様のご要望を担当スタッフがしっかりと理解し、二人三脚でリフォームを進めます。</p>
					</div>
				<!--/item-->
				</div>
			<!--/inner-->
		</section>
		<!--/section-->
		<!--section-->
		<!--<section class="voice">
			<h2>お客様の声</h2>
			<p class="other"><a href="/voice/">その他のお客様の声を見る</a></p>
			<div class="inner clearfix">
				<!--<div class="item">
					<p class="img"><img src="/img/img18.jpg" width="190" height="130" alt="ss"></p>
					<p class="title"><a href="#">大津市 T様からの声</a></p>
					<p class="body">中古物件を購入し、内外装をすべてリフォームしました。まったく新しい家に生まれ変わったようで、大変…</p>
					<p class="btn"><a href="#">詳細を見る</a></p>
					</div>
				</div>
		</section>-->
		<!--/section-->
				<p class="banner opacity"><a href="/interview/"><img src="/img/longint_banner.jpg" width="900" height="147" alt="お客様ロングインタビュー" /></a></p>
		<!--section-->
		<section class="value">
			<h2>リフォームのお得情報</h2>
			<!--inner-->
			<div class="inner">
				<ul class="clearfix">
					<!--<li><a href="#"><img src="/img/img24.jpg" width="195" height="110" alt="耐震改修助成制度"></a></li>
					<li><a href="#"><img src="/img/img25.jpg" width="195" height="110" alt="介護保険制度"></a></li>
					<li><a href="#"><img src="/img/img26.jpg" width="194" height="110" alt="太陽光システム設置補助金制度"></a></li>-->
					<li><a href="/common/pdf/chirashi.pdf" target="_blank"><img src="/img/img27.jpg" width="190" height="110" alt="最新チラシ情報"></a></li>
					<li><a href="/724/"><img src="/img/img28.jpg" width="190" height="110" alt="エコ外壁塗装"></a></li>
					<li><a href="/925/"><img src="/img/img29.jpg" width="190" height="110" alt="水回りセット"></a></li>
					</ul>
				</div>
			<!--/inner-->
		</section>
		<!--/section-->
		<!--section-->
		<section class="read">
			<!--inner-->
			<div class="inner clearfix">
				<ul class="left clearfix">
					<li><img src="/img/img30.jpg" width="198" height="196" alt="Home Style Renovation 京都市伏見区下鳥羽西芹川町52"></li>
					<li><img src="/img/img31.jpg" width="198" height="196" alt="向日市ステーションパーク店　京都府向日市鶏冠井町西金村5向日市ステーションパーク1F"></li>
					</ul>
				<div class="right">
					<h3>「リフォームのこと、ちょっと聞いてみようかな…」と思ったら<br>
						ハウスウィンドウにお気軽にお声かけください</h3>
					<p><strong>京都のリフォーム専門店ハウスウィンドウ</strong>は、リノベーション・プランニングまで一貫対応する伏見本店。<br>
						「向日市ステーションパーク」１Ｆにある、向日店の2店舗体制。京都のリフォーム事情に精通したスタッフが、住まいに関する悩みご要望などをお聞きし、お客様に最適なリフォームプランのご提案をいたします。</p>
					<p>当店は、水回りやカーポートなどのエクステリア・リフォームにも対応。新築や中古物件の建て替えをお考えのお客様も、是非、ハウスウィンドウ各店にご相談下さい。</p>
					<p>ハウスウィンドウの各店では、リフォームに関する無料相談も随時行っています。お家の悩みやリフォームに関するご相談がありましたら、買い物帰りや会社帰りに、お気軽にご来店くださいませ。</p>
					</div>
				</div>
			<!--/inner-->
		</section>
		<!--/section-->
		<p class="banner"><a href="/qa/"><img src="/img/img32.jpg" width="681" height="100" alt="よくあるご質問Q&amp;Aお客様からのよくあるご質問にお答えします"></a></p>
		<!--section-->
		<section class="area">
			<!--inner-->
			<div class="inner">
				<div class="item">
					<h2>リフォーム・外壁塗装ご対応エリア</h2>
					<p>【無料出張対応エリア】<br>
						向日市・長岡京市・京都市（伏見区・右京区・西京区・南区・山科区）</p>
					<p>上記の地域のほか、一部大阪地域も対応可能でございます。<br>
						お気軽にお問い合わせください。</p>
					<p class="btn"><a href="/contact/mail_send.php">お問い合わせはこちら</a></p>
					<p class="tel">お電話でのお問い合わせ<br>
						<strong>TEL:0120-88-1615</strong><br>
						営業時間　10:00～18:00</p>
					<p class="ac"><strong>【向日市ステーションパーク店】</strong><br />
					京都府向日市鶏冠井町西金村5<br />
					向日市ステーションパーク1F</p>
					<p class="ac"><strong>【Home Style Renovation】</strong><br />
					京都市伏見区下鳥羽西芹川町52</p>
					</div>
				<p class="map"><img src="/img/img33.png" width="276" height="272" alt="対応エリア"></p>
				</div>
			<!--/inner-->
		</section>
		<!--/section-->
		<!--section-->
		<section class="maker">
			<h2>各種取り扱いメーカー</h2>
			<!--inner-->
			<div class="inner">
				<ul class="clearfix">
					<li><img src="/img/com_logo01.png" width="100" height="50" alt="Panasonic"></li>
					<li><img src="/img/com_logo02.png" width="100" height="50" alt="LIXIL"></li>
					<li><img src="/img/com_logo03.png" width="100" height="50" alt="TOTO"></li>
					<li><img src="/img/com_logo04.png" width="100" height="50" alt="NORITZ"></li>
					<li><img src="/img/com_logo05.png" width="100" height="50" alt="TOCLAS"></li>
					<li><img src="/img/com_logo06.png" width="100" height="50" alt="クリナップ"></li>
					<li><img src="/img/com_logo07.png" width="100" height="50" alt="タカラ"></li>
					<li><img src="/img/com_logo08.png" width="100" height="50" alt="WOODONE"></li>
					<li><img src="/img/com_logo09.png" width="100" height="50" alt="Housetec"></li>
					<li><img src="/img/com_logo10.png" width="100" height="50" alt="Janis"></li>
					</ul>
				</div>
			<!--/inner-->
		</section>
		<!--/section-->
		</div>
		<!--/#main--> 
<?php get_sidebar(); ?>
<?php get_footer(); ?>