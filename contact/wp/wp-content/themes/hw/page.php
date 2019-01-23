<?php is_front_page(); ?>
<?php get_header(); ?>
<!--#main-->
		<div id="main">
			<!--section-->
			<section class="coma">
				<div class="inner bb-b clearfix">
					<p><a href="/re_painting/"><img src="img/new/img01_01.jpg" width="550" height="402" alt="外壁塗装・屋根塗装"/></a></p>
     <ul class="clearfix">
      <li><a href="/mansion-reform/"><img src="img/new/img01_02.jpg" width="410" height="195" alt="マンションフルリフォーム"/></a></li>
      <li><img src="img/new/img01_03.jpg" width="410" height="195" alt="戸建フルリフォーム"/></li>
     </ul>
				</div>
			</section>
			<!--/section-->
		<p class="banner-i"><a href="/contact/mail_send.php"><img src="img/img34.png" width="1000" height="150" alt="リフォーム・外壁塗装お問い合わせ資料請求　お電話のお問い合わせ0120-88-1615営業時間：10:00～18:00" class="pc-dake"><img src="img/img34_sp.png" width="679" height="299" alt="リフォーム・外壁塗装お問い合わせ資料請求　お電話のお問い合わせ0120-88-1615営業時間：10:00～18:00" class="sp-dake"></a></p>
			<!--section-->
		  <section class="case preset">
				<h2>ハウスウィンドウの施工事例</h2>
				<!--inner-->
			<div class="inner clearfix">
				<h3>リノベーション事例</h3>
				
				
			<?php query_posts('cat=9&posts_per_page=6'); ?>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<!--item-->
				<div class="item">
					<p class="title opacity"><a href="<?php the_permalink(); ?>">
					<?php
						$title= 'フルリフォーム';
						the_post_thumbnail(array( 300,99999 ),
						array( 'alt' =>$title, 'title' => $title)); 
						?></a></p>
					<dl>
						<dt>地域 / 種別：<?php echo post_custom('area'); ?></dt>
						<dt class="price-se"><?php echo post_custom('price'); ?></dt>
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
			  <p class="more"><a href="/case/">その他の事例を見る</a></p>
			</div>
			<!--/inner-->
				<!--inner-->
			<div class="inner clearfix">
				<h3>外壁塗装</h3>
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
						<dt class="price-se"><?php echo post_custom('price'); ?></dt>
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
			  <p class="more"><a href="/case/">その他の事例を見る</a></p>
			</div>
			<!--/inner-->
			</section>
			<!--/section-->
				<p class="banner"><a href="/re_painting/"><img src="img/new/img25.jpg" width="990" height="120" alt="今がチャンス！外壁・塗装キャンペーン実施中"/></a></p>
			<!--section-->
			<section class="case preset">
				<h2>取り扱い工事一覧</h2>
				<!--inner-->
			<div class="inner clearfix">
				<ul class="clearfix">
					<li><a href="/mansion-reform/">
				    <img src="img/new/img26.jpg" width="170" height="100" alt="マンション"/><span class="link">マンション</span><span class="cont">中古マンションを思いのままの生活空間
へ変えるリフォームは大人気です。</span></a></li>
					<li><a href="/reform/">
				    <img src="img/new/img27.jpg" width="170" height="100" alt="戸建て"/><span class="link">戸建て</span><span class="cont">家族の成長に合わせてお部屋の構成変更
リフォームやバリアフリー住宅化など。</span></a></li>
					<li><a href="/re_painting/">
				    <img src="img/new/img28.jpg" width="170" height="100" alt="外壁・屋根塗装"/><span class="link">外壁・屋根塗装</span><span class="cont">美観はもちろん耐久性も蘇り、長年住んだご自宅だ新築のように輝きます。</span></a></li>
					<li><a href="/reform_kitchen/">
				    <img src="img/new/img29.jpg" width="170" height="100" alt="キッチン"/><span class="link">キッチン</span><span class="cont">長く使うキッチンだからこそ、使い勝手や動線を考えてタイプを選びましょう。</span></a></li>
					<li><a href="/reform_bath/">
				    <img src="img/new/img30.jpg" width="170" height="100" alt="お風呂"/><span class="link">お風呂</span><span class="cont">１日の疲れを癒すお風呂をリフォーム。ゆったりと快適にくつろげる空間へ。</span></a></li>
					<li><a href="/reform_washstand/">
				    <img src="img/new/img31.jpg" width="170" height="100" alt="洗面台"/><span class="link">洗面台</span><span class="cont">収納が豊富で大きい洗面化粧台や、簡易的で小さな洗面台など選べます。</span></a></li>
					<li><a href="/reform_toilet/">
				    <img src="img/new/img32.jpg" width="170" height="100" alt="トイレ"/><span class="link">トイレ</span><span class="cont">使いやすさやお掃除がしやすいトイレなど人気のメーカー取り揃えています。</span></a></li>
				</ul>
			</div>
			<!--/inner-->
			</section>
			<!--/section-->
		<p class="banner"><a href="/interview/"><img src="/img/new/img33.jpg" width="990" height="120" alt="お客様インタビュー"/></a></p>
		<p class="banner-i"><a href="/contact/mail_send.php"><img src="img/img34.png" width="1000" height="150" alt="リフォーム・外壁塗装お問い合わせ資料請求　お電話のお問い合わせ0120-88-1615営業時間：10:00～18:00" class="pc-dake"><img src="img/img34_sp.png" width="679" height="299" alt="リフォーム・外壁塗装お問い合わせ資料請求　お電話のお問い合わせ0120-88-1615営業時間：10:00～18:00" class="sp-dake"></a></p>
			<!--section-->
			<section>
				<p class="com02">ハウスウィンドウが選ばれるには理由があります</p>
				<h2>ハウスウィンドウが選ばれる<span class="spbr">3つの理由</span></h2>
				<div class="inner merit reason">
					<!--item-->
				  <div class="item clearfix">
					<h3><span class="namber">理由1</span>地域密着、地元を知り尽くしたプロが施工プランを提案</h3>
					  <p class="img"><img src="img/new/img22.jpg" width="360" height="280" alt="地域密着、地元を知り尽くしたプロが施工プランを提案"/></p>
					  <h4>住環境に関わる施工は、地域ならではのライフスタイルや気候に
					  合うように行ってこそ、最適なものになると言えます。</h4>
					  <p class="h4read">ハウスウィンドウは地域の特性を生かした提案で、<br>
					  心地よい暮らしづくりをお手伝いします。</p>
					  <p>ハウスウィンドウは京都府向日市に拠点を置く、地域密着の工務店です。そのため、京都ならではのしきたりや気候を熟知しています。地域の風土を十分に考慮した施工・工事で、快適な住空間をご提供します。工事前の近隣に対するご挨拶などもしきたりに沿って行いますので、ぜひお任せください。</p>
					  <p>また、お引き渡し後のアフターサービスに力を入れられるのも、地域に根差しているからできることです。お客さまのお住まいに何かトラブルがあれば、すぐに駆けつけられるという距離感を大切に、充実のアフターメンテナンスで安心をお約束します。</p>
					</div>
					<!--/item-->
					<!--item-->
				  <div class="item clearfix">
					<h3><span class="namber">理由2</span>創業18年、2,000件以上の施工実績</h3>
					  <p class="img"><img src="img/new/img23.jpg" width="360" height="280" alt="創業18年、2,000件以上の施工実績"/></p>
					  <h4>長年にわたり積み上げてきた豊富な実績があってこそできる最高級の改築やリノベーション。</h4>
					  <p class="h4read">専任スタッフ制で、お客さまのご要望に100％お応えします。</p>
					  <p>ハウスウィンドウは2000年の創業以来、京都市のお客さまと、隣接地域のみなさまに、高品質な改築サービスのご提供を続けてきました。そして、その施工実績はマンション、戸建て住宅合わせて2,000件を上回り、これまでさまざまなご要望にお応えしてきました。</p>
					  <p>サービスを提供するのは、長年住宅の改善に携わってきた住環境のプロ集団です。お客さまのお住まいへの希望をしっかりカタチにできるよう、専任スタッフ制を採用し、お客さま一人ひとりに最適なプランをご提案。2,000件の実績で培った豊富な経験と高い技術力で、高品質の住空間を作り上げます。</p>
					</div>
					<!--/item-->
					<!--item-->
				  <div class="item clearfix">
					<h3><span class="namber">理由3</span>戸建て住宅やマンション、大型店舗まで、建物の構造を熟知した適正判断</h3>
					  <p class="img"><img src="img/new/img24.jpg" width="360" height="280" alt="戸建て住宅やマンション、大型店舗まで、建物の構造を熟知した適正判断"/></p>
					  <h4>建物の工法に対する知識も十分なため、お住まいの特徴に合わせたプランのご提案が可能です。</h4>
					  <p class="h4read">小さな工事から大きな工事まで、マンションでも<br>
					  戸建て住宅でも、住まいのことなら何でもお任せください。</p>
					  <p>木造軸組工法やツーバイフォー工法、鉄骨造など、建物の工法にはさまざまあり、同じ工事でも、工法により施工を変える必要があります。ハウスウィンドウは、建物の骨格を決める工法についても熟知しているため、お住まいの特徴を踏まえたうえで、最適なプランのご提案ができます。</p>
					  <p>お風呂場やトイレなど部分的な工事から、間取りの変更が必要になるような全面改修まで施工実績は豊富です。お住まいの増改築なら何でもお任せください。熟練の担当者がお客さまのご要望を隅々までカタチにします。</p>
					</div>
					<!--/item-->
				</div>
			</section>
			<!--/section-->
			<!--section-->
			<section id="Nagare">
            	<div class="inner">
            	<h2>お申し込みから工事完了・アフターフォローまでの流れ</h2>
                	<div class="nagarestep">
                    	<div class="nagareeach clearfix">
                        	<h3>Step1</h3>
                            <img src="mansion-reform/img/renew/step01.png" alt="お問い合わせ・ご連絡">
                            <h4 class="msec">お問い合わせ・ご連絡</h4>
                            <p>住宅・店舗の改修工事をお考えなら、お気軽に当社までご連絡ください。</p>
                        </div>
                        <div class="nagareeach clearfix">
                        	<h3>Step2</h3>
                            <img src="mansion-reform/img/renew/step02.png" alt="ご相談・ご要望のヒアリング">
                            <h4>ご相談・ご要望の<br>
								ヒアリング</h4>
                            <p>リフォーム・リノベーションに精通した専門スタッフが対応します。</p>
                        </div>
                        <div class="nagareeach clearfix">
                        	<h3>Step3</h3>
                            <img src="mansion-reform/img/renew/step03.png" alt="現地調査">
                            <h4 class="msec">現地調査</h4>
                            <p>お客様のお宅を、工事担当責任者が調査に伺います。</p>
                        </div>
                        <div class="nagareeach clearfix">
                        	<h3>Step4</h3>
                            <img src="mansion-reform/img/renew/step04.png" alt="リフォームプラン・お見積りをご提案">
                            <h4>リフォームプラン・<br>
								お見積りをご提案</h4>
                            <p>お客さまのご自宅の現状と、ご要望を合致させるプラン・お見積りをご提出いたします。</p>
                        </div>
                        <div class="nagareeach clearfix">
                        	<h3>Step5</h3>
                            <img src="mansion-reform/img/renew/step05.png" alt="ご契約">
                            <h4>ご契約</h4>
                            <p>当社のリフォームプランと、お見積りにご納得いただければ工事をご契約いただきます。</p>
                        </div>
                        <div class="nagareeach clearfix">
                        	<h3>Step6</h3>
                            <img src="mansion-reform/img/renew/step06.png" alt="改修工事">
                            <h4>改修工事</h4>
                            <p>リフォーム工事に長年携わるベテランスタッフの監督のもと工事を行います。</p>
                        </div>
                        <div class="nagareeach clearfix">
                        	<h3>Step7</h3>
                            <img src="mansion-reform/img/renew/step07.png" alt="お引渡し">
                            <h4>お引渡し</h4>
                            <p>工事完了後、お客さまに施工場所の説明を行い、ご納得いただければお引き渡しとなります。</p>
                        </div>
                        <div class="nagareeach clearfix">
                        	<h3>Step8</h3>
                            <img src="mansion-reform/img/renew/step08.png" alt="アフターフォロー">
                            <h4>アフターフォロー</h4>
                            <p>工事完了後、何か不具合があれば対処対応を行います。</p>
                        </div>
                    </div>                
                </div>
            </section>
			<!--/section-->
			<!--section-->
			<section>
				<p class="com">あなたの理想のお家づくりをサポート</p>
				<h2>ハウスウィンドウで<span class="spbr">リフォームするメリット</span></h2>
				<div class="inner merit">
					<!--item-->
				  <div class="item clearfix">
					<h3><span class="namber">メリット1</span>確かなクオリティ管理をご相談から施工まで。</h3>
					  <p class="img"><img src="img/new/img19.jpg" width="360" height="280" alt="確かなクオリティ管理をご相談から施工まで。"/></p>
					  <h4>戸建てマンションに関わらず、解体・施工・改築などに関する<br>
					  全工程を自社で行い、管理します。</h4>
					  <p class="h4read">工事内容はもちろん、スタッフのマナーにおいても<br>
					  	高品質を追求し、お客さまに最高の満足を<br>
					  提供できるよう努めています。</p>
					  <p>住宅関連の工務店は、サービスを販売する会社と、工事を行う業者が分かれている場合が少なくありません。受注したらすぐ、下請けに全てを任してしまうなんてケースもしばしば。そして、そのことが原因で、工事内容にまで管理が行き渡らなかったり、職人が把握していた内容と実際行わなければならない施工がかみ合わずにもめたりというトラブルが頻発しています。</p>
					  <p>ハウスウィンドウは設計から施工までをワンストップで行います。弊社の営業や監督、職人が密に連携しながら施工していくため、品質管理は行き渡り、工事におけるトラブルの発生が最小限に抑えられます。さらに、スタッフのマナーまでを徹底し、全体を通してお客さまにご満足いただけるサービスとなるよう努めています。</p>
					</div>
					<!--/item-->
					<!--item-->
				  <div class="item clearfix">
					<h3><span class="namber">メリット2</span>一貫対応により無駄なコストを削減。低料金で理想の住まいを実現します。</h3>
					  <p class="img"><img src="img/new/img20.jpg" width="360" height="280" alt="一貫対応により無駄なコストを削減。低料金で理想の住まいを実現します。"/></p>
					  <h4>ハウスウィンドウの施工費用が安価なのは、中間マージンや無駄な広告費を削減しているからです。</h4>
					  <p class="h4read">完成後の予算オーバーなんてもってのほか。<br>
					  お客さまのご希望を予算内で実現します。</p>
					  <p>住宅の増改築費用が高くなる一番の理由は、中間マージンにあります。1つの案件に、メーカーや代理店、工務店、工事会社と何社もが関わることが多く、そのため高額な中間マージンが発生してしまうのです。ハウスウィンドウは、自社のみでサービスの提供を完結させるため、無駄な中間マージンが全て省かれます。</p>
       <p>また、DMやチラシなどの宣伝広告費も料金を高くする大きな要因です。当社では店舗での販売を中心に行うことで、宣伝広告費を最大限削減しています。そのため、中間マージンと宣伝広告費の料金への上乗せが避けられ、その分費用を低く抑えられます。お客さまのご予算内で住まいのご要望を実現し、施工後に追加料金をいただくこともありません。<br>
       ※お客様のご要望で追加工事があった場合、追加工事費用が発生いたします。</p>
					</div>
					<!--/item-->
					<!--item-->
				  <div class="item clearfix">
					<h3><span class="namber">メリット3</span>安心の1年リフォーム保証と充実のアフターメンテナンス。</h3>
					  <p class="img"><img src="img/new/img21.jpg" width="360" height="280" alt="安心の1年リフォーム保証と充実のアフターメンテナンス。"/></p>
					  <h4>長年にわたり積み上げてきた豊富な実績が<br>
					  あってこそできる最高級の改築やリノベーション工事。</h4>
					  <p class="h4read">また、工事半年後と１年後にはお住まいに伺い、<br>
					  	無償で点検させていただきます。<br>
					  ※ただし、保証が付かない施工も一部あります。</p>
					  <p>例えば壁紙を張替えた場合、施工後近日中に、室内の湿度や温度に急激な変化があったりすると、クロスに変形が起こり、めくれたり浮いてきたりする場合があります。そのように、工事当初綺麗に仕上がっていても、後々修繕が必要になってくるケースは新築・中古、マンション・戸建てに関わらず、少数ながらあるものです。</p>
					  <p>ハウスウィンドウでは、お引き渡し後もしそういった不具合が出てきても、すぐに駆け付け、補修対応するため安心です。<br>
					  また実施した工事に不備がなく、満足かどうかは、暮らし始めてみないとわからないところがあります。そこで当社では、お引き渡しから半年後と１年後にお客さまのお住まいに伺い、不備が発生していないか点検させていただきます。お住まいに過ごされるなかで、さらにご希望などが出てきましたら、どのようなことでもお申しつけください。</p>
					</div>
					<!--/item-->
				</div>
			</section>
			<!--/section-->
			
		<p class="banner-i"><a href="/contact/mail_send.php"><img src="img/img34.png" width="1000" height="150" alt="リフォーム・外壁塗装お問い合わせ資料請求　お電話のお問い合わせ0120-88-1615営業時間：10:00～18:00"></a></p>
			<!--section-->
		<section class="maker">
			<h2>各種取り扱いメーカー</h2>
			<!--inner-->
			<div class="inner">
				<ul class="clearfix">
					<li><img src="img/com_logo01.png" width="100" height="50" alt="Panasonic"></li>
					<li><img src="img/com_logo02.png" width="100" height="50" alt="LIXIL"></li>
					<li><img src="img/com_logo03.png" width="100" height="50" alt="TOTO"></li>
					<li><img src="img/com_logo04.png" width="100" height="50" alt="NORITZ"></li>
					<li><img src="img/com_logo05.png" width="100" height="50" alt="TOCLAS"></li>
					<li><img src="img/com_logo06.png" width="100" height="50" alt="クリナップ"></li>
					<li><img src="img/com_logo07.png" width="100" height="50" alt="タカラ"></li>
					<li><img src="img/com_logo08.png" width="100" height="50" alt="WOODONE"></li>
					<li><img src="img/com_logo09.png" width="100" height="50" alt="Housetec"></li>
					<li><img src="img/com_logo10.png" width="100" height="50" alt="Janis"></li>
				</ul>
			</div>
			<!--/inner-->
		</section>
		<!--/section-->
		  <p class="banner"><a href="/premiumpack/"><img src="/img/premium_banner_yoko.jpg" width="870" height="138" alt="最上級水回り４点セット" class="pc-dake"/><img src="/img/premium_banner.jpg" width="680" height="300" alt="最上級水回り４点セット" class="sp-dake"/></a></p>
			<!--section-->
		  <!--<section class="case preset">
				<h2>リフォームのお得情報</h2>
			<div class="inner clearfix">
				<ul class="otoku clearfix">
     <li><a href="/common/pdf/chirashi.pdf"><img src="img/new/img34.jpg" width="295" height="143" alt="最新チラシ情報"/></a></li>
      <li><a href="/reform/painting/"><img src="img/new/img35.jpg" width="295" height="140" alt="エコ外壁塗装"/></a></li>
      <li><a href="/925/"><img src="img/new/img36.jpg" width="295" height="140" alt="水回りセット"/></a></li>
    </ul>
			</div>
			</section>-->
			<!--/section-->
				<!--<p class="banner"><a href="/qa/"><img src="img/new/img37.png" width="990" height="120" alt="よくあるご質問Q&A　お客様からのよくあるご質問にお答えします"/></a></p>-->
			<!--section-->
			<!--<section class="qa">
				<h2>よくあるご質問</h2>
				<div class="inner">
					<dl>
						<dt>工事中は自宅にいないといけませんか？</dt>
						<dd>どちらでも結構です。結局は業者との信頼関係です。住みながらの長いリフォーム工事では鍵をお預かりするケースもありますし十分な信頼関係があれば家を空けても大丈夫です。しかし万が一があってはいけないので鍵を預ける場合は金目のものや大事なものは金庫等に保管するのが一番です。</dd>
					</dl>
					<dl>
						<dt>間取り変更は自由にできる？</dt>
						<dd>間取り変更の自由度は構造によりますが、大胆な間取り変更が可能です。</dd>
					</dl>
					<dl>
						<dt>現地調査はどのような事をするのですか？</dt>
						<dd>施工内容にもよりますが主に寸法取りや現在の状態を見るために行います。お客様が写真や寸法を完璧に取っていれば必要ないかもしれませんがまず無理でしょう。<br>
       トイレ一つにしてもトイレ内の寸法・現在のトイレ品番・給排水の位置・クロスやＣＦのm数など見るところはたくさんあります。失敗しない為にも現地調査は必要です。</dd>

					</dl>
					<dl>
						<dt>古い家でも地震に備えられる？</dt>
						<dd>老朽化が気になる建物をリフォームする時はまず耐震診断を受けましょう。</dd>
					</dl>
					<p class="btn"><a href="/qa/">よくあるご質問をもっと見る</a></p>
				</div>
			</section>-->
			<!--/section-->
		<!--section-->
		<section class="area">
			<!--inner-->
			<div class="inner">
				<div class="item">
					<h2>改築・リノベーション・外壁塗装ご対応エリア</h2>
					<p>【無料出張対応エリア】<br>
						向日市・長岡京市・京都市（伏見区・右京区・西京区・南区・山科区）</p>
					<p>上記の地域のほか、一部大阪地域も対応可能でございます。<br>
						お気軽にお問い合わせください。</p>
					<p class="btn"><a href="/contact/mail_send.php">お問い合わせはこちら</a></p>
					<p class="tel">お電話でのお問い合わせ<br>
						<strong>TEL:<a href="tel:0120-88-1615" style="color:#602b00;" onclick="ga('send', 'event', 'tel_cv', 'click', 'area');">0120-88-1615</a></strong>営業時間　10:00～18:00</p>
					<ul class="clearfix">
						<li><strong>【向日市ステーションパーク店】</strong><br>
							京都府向日市鶏冠井町西金村5<br>
							向日市ステーションパーク1F</li>
						<li><strong>【Home Style Renovation】</strong><br>
							京都市伏見区下鳥羽西芹川町52</li>
					</ul>
				</div>
				<p class="cach">住宅関連の工事ならどんなことでも<br>
				ハウスウィンドウにお任せください。</p>
				<p class="map"><img src="img/img33.png" width="326" height="322" alt="リフォーム対応エリア"></p>
			</div>
			<!--/inner-->
		</section>
		<!--/section-->
		
		</div>
		<!--/#main--> 
<?php get_footer(); ?>