<html>
<header>
	<title>Ads test</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/style-res.css')}}">
</header>
<body>
	<div class="header" style="display: inline !important;">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
					<img style="width: 250px;" src="{{url('../front-end/image/Tsukapotajapan.png')}}">
				</div>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light"><!-- 
				<a class="navbar-brand" href="#">ホーム</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
 -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a style="width: 120px; text-align: center;" class="nav-link justify-content-center" href="#">
								<img style="width: 44px; height: 45px;" src="{{url('../front-end/image/グルメアイコン.png')}}">
								<h6>グルメ</h6>
							</a>
						</li>
						<li class="nav-item">
							<a style="width: 120px; text-align: center;" class="nav-link justify-content-center" href="#">
								<img style="width: 44px; height: 45px;" src="{{url('../front-end/image/ショッピングアイコン.png')}}">
								<h6>ショッピング</h6>
							</a>
						</li>
						<li class="nav-item">
							<a style="width: 120px; text-align: center;" class="nav-link justify-content-center" href="#">
								<img style="width: 44px; height: 45px;" src="{{url('../front-end/image/ヘルスケアアイコン.png')}}">
								<h6>ヘルスケア</h6>
							</a>
						</li>
						<li class="nav-item active">
							<a style="width: 120px; text-align: center;" class="nav-link justify-content-center" href="#">
								<img style="width: 44px; height: 45px;" src="{{url('../front-end/image/不動産アイコン.png')}}">
								<h6>不動産</h6>
							</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="入力してください" aria-label="Search">
						<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">検索</button>
					</form>
				</div>
			</nav>
		</div>
	</div>
	<br>
	<div class="contents">
		<div class="container content">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<div class="row" style="background-color: #fff">
						<div class="col-md-4 col-lg-4 col-xl-4" id="top-news">
							<img class="border border-dark" src="{{url('../front-end/image/top-news.png')}}">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="padding-left: 0px; padding-right: 0px;">
							<ul class="list-group-flush border-bottom" id="list-top-news">
								<li class="list-group-item">
									<a href="#"><h6>ツカミの達人はクロージング支援AIシステムです</h6></a>
								</li>
								<li class="list-group-item">
									<a href="#"><h6>ツカミの達人　不動産営業支援版</h6></a>
								</li>
								<li class="list-group-item">
									<a href="#"><h6>ツカめる・ツカえる・ツカれない！出稿セールスコメント自動生成機能</h6></a>
								</li>
								<li class="list-group-item">
									<a href="#"><h6>HPはくらべる場。一人ひとりを説得する「くらべルーム」機能</h6></a>
								</li>
								<li class="list-group-item">
									<a href="#"><h6>問い合わせしたお客様像を推定する「アナライザー」機能</h6></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center" id="ads-patern">
				<div>
					<h6><b>広告エリア</b></h6>
				</div>
				<div class="test-ads border">
					<div class="test-ads-overlay">
					</div>
					<p class="sales-comment">
						気づいてました？
						<br>
						この
						<!-- この<span style="color: yellow;">中目黒3,200万円の中古2LDKマンション</span>、
						<br>
						<span style="color: pink">星空が見えるルーフバルコニー付き</span> -->
						<?php foreach ($saleTalk as $saleTalk) {
								echo $saleTalk->train_subway_station_1;
    							echo round($saleTalk->price_1/10000, 2) . "万円";
    							echo 'の';
    							echo $saleTalk->floor_plan;
    							echo $saleTalk->property_category;
    							echo '、';
    							echo $saleTalk->sentence_content;
							}
						?>
					が魅力なこと。</p>
					<div class="test-ads-logo">
						<img src="{{url('../front-end/image/logo.png')}}">
					</div>
					<div class="choice-btn">
						<a class="border like" href="#">気になっていた</a>
						<a class="border dont-like" href="#">気づかなかった</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="contents">
	<div class="container content">
		<div class="row">
			<div class="col">
				<div class="row border-bottom">
					<h4>動画でツカミの達人を理解</h4>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/ngKkwlmo1Xc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" id="top-access-news" style="padding-top: 10px; padding-bottom: 10px;">
				<div class="col">
					<a href="#">
						<h4>アクセスランキング</h4>
					</a>
					<ul class="list-group-flush border-bottom">
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<img class="access-news" src="{{url('../front-end/image/suggest-news.jpg')}}">
								<h6>ベテラン営業マンの”５つのなんとなく”</h6>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<img class="access-news" src="{{url('../front-end/image/suggest-news.jpg')}}">
								<h6>豊富な商品知見がある（＝商品統計DB）</h6>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<img class="access-news" src="{{url('../front-end/image/suggest-news.jpg')}}">
								<h6>鋭い顧客行動観察眼がある（＝顧客の行動観察）</h6>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<img class="access-news" src="{{url('../front-end/image/suggest-news.jpg')}}">
								<h6>カウンセリング力が高い（＝ヒアリングシステム）</h6>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<img class="access-news" src="{{url('../front-end/image/suggest-news.jpg')}}">
								<h6>お客様の好みと妥協を見極められる（＝顧客志向DB）</h6>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<img class="access-news" src="{{url('../front-end/image/suggest-news.jpg')}}">
								<h6>豊かな表現力で語れる（＝クリエイティビティ）</h6>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="contents">
	<div class="container content">
		<div class="row">
			<div class="col">
				<div class="row border-bottom">
					<h4>オススメ記事</h4>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 list-suggest-news">
				<ul class="list-group-flush border-bottom">
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>ベテラン営業マンの”５つのなんとなく”をAIで再現</h6>
								</div>
								<div class="short-paragraph">
									<p>ベテラン営業マンの”５つのなんとなく”をAIで再現し、駆け出し営業マンをベテランに、ベテラン営業マンをスーパー営業マンにするお手伝いをします。</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>コンサルティング</h6>
								</div>
								<div class="short-paragraph">
									<p>なんとなく”を可視化するコンサルティング</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>ツカミの達人</h6>
								</div>
								<div class="short-paragraph">
									<p>クロージング支援システム 　国際特許出願申請中</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>Value Chart バリューチャート</h6>
								</div>
								<div class="short-paragraph">
									<p>不動産マッチングエンジン</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>株式会社GFL</h6>
								</div>
								<div class="short-paragraph">
									<p>東京都渋谷区道玄坂1-22-9 AD-O渋谷道玄坂2F</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>書籍：なぜ脳は「なんとなく」で買ってしまうのか？</h6>
								</div>
								<div class="short-paragraph">
									<p>ニューロマーケティングで変わる５つの常識（ダイヤモンド社）
									田邊 学司：著　小野寺 健司：編著　萩原 一平／三浦 俊彦：監修</p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center" id="ads-patern">
				<div>
					<h6><b>広告エリア</b></h6>
				</div>
				<div class="test-ads border">
					<div class="test-ads-overlay">
					</div>
					<p class="sales-comment">
						気づいてました？
						<br>
						この<span style="color: yellow;">中目黒3,200万円の中古2LDKマンション</span>、
						<br>
						<span style="color: pink">星空が見えるルーフバルコニー付き</span>
					の物件だったことを。</p>
					<div class="test-ads-logo">
						<img src="{{url('../front-end/image/logo.png')}}">
					</div>
					<div class="choice-btn">
						<a class="border like" href="#">気になっていた</a>
						<a class="border dont-like" href="#">気づかなかった</a>
					</div>
				</div>
				<div class="test-ads border">
					<div class="test-ads-overlay">
					</div>
					<p class="sales-comment">
						気づいてました？
						<br>
						この<span style="color: yellow;">中目黒3,200万円の中古2LDKマンション</span>、
						<br>
						<span style="color: pink">星空が見えるルーフバルコニー付き</span>
					の物件だったことを。</p>
					<div class="test-ads-logo">
						<img src="{{url('../front-end/image/logo.png')}}">
					</div>
					<div class="choice-btn">
						<a class="border like" href="#">気になっていた</a>
						<a class="border dont-like" href="#">気づかなかった</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="contents">
	<div class="container content">
		<div class="row">
			<div class="col">
				<div class="row border-bottom">
					<h4>オススメ記事</h4>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 list-suggest-news">
				<ul class="list-group-flush border-bottom">
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>GIRAFFE&CO</h6>
								</div>
								<div class="short-paragraph">
									<p>それは「iある視点」のWebマーケティング</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>MESSAGE</h6>
								</div>
								<div class="short-paragraph">
									<p>「ヒト・ヒト・i（アイ）」を経営資源に
									世界へ広がるサービスを</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>営業理念</h6>
								</div>
								<div class="short-paragraph">
									<p>私たちGiRAFFE&Co.は、SEOを軸に、Webマーケティングの課題を独自の視点で解決するWebマーケティングソリューションカンパニーです。</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>VISION</h6>
								</div>
								<div class="short-paragraph">
									<p>Webマーケティング業界で、最も結果を出すチーム</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>MISSION</h6>
								</div>
								<div class="short-paragraph">
									<p>インターネットを通じて、クライアントが持つ「良いモノ」「良いサービス」「確かな情報」を社会に広げ、豊かな社会づくりに貢献します。</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>VALUE</h6>
								</div>
								<div class="short-paragraph">
									<p>常に一段高い視点で「 i 」を追求します</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>会社情報</h6>
								</div>
								<div class="short-paragraph">
									<p>東京都千代田区神田須田町1丁目17 神田須田町117ビルディング4F</p>
								</div>
							</div>
						</a>
					</li>
					<li class="list-group-item">
						<a href="#" style="display: flex;">
							<div><img class="suggest-news" src="{{url('../front-end/image/suggest-news.jpg')}}"></div>
							<div class="sub-news">
								<div>
									<h6>ツカミの達人リターゲット</h6>
								</div>
								<div class="short-paragraph">
									<p>価値をつたえる</p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center" id="ads-patern">
				<div>
					<h6><b>広告エリア</b></h6>
				</div>
				<div class="test-ads border">
					<div class="test-ads-overlay">
					</div>
					<p class="sales-comment">
						気づいてました？
						<br>
						この<span style="color: yellow;">中目黒3,200万円の中古2LDKマンション</span>、
						<br>
						<span style="color: pink">星空が見えるルーフバルコニー付き</span>
					の物件だったことを。</p>
					<div class="test-ads-logo">
						<img src="{{url('../front-end/image/logo.png')}}">
					</div>
					<div class="choice-btn">
						<a class="border like" href="#">気になっていた</a>
						<a class="border dont-like" href="#">気づかなかった</a>
					</div>
				</div>
				<div class="test-ads border">
					<div class="test-ads-overlay">
					</div>
					<p class="sales-comment">
						気づいてました？
						<br>
						この<span style="color: yellow;">中目黒3,200万円の中古2LDKマンション</span>、
						<br>
						<span style="color: pink">星空が見えるルーフバルコニー付き</span>
					の物件だったことを。</p>
					<div class="test-ads-logo">
						<img src="{{url('../front-end/image/logo.png')}}">
					</div>
					<div class="choice-btn">
						<a class="border like" href="#">気になっていた</a>
						<a class="border dont-like" href="#">気づかなかった</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<div class="footer">
	<div class="container">
		<blockquote class="blockquote text-center">
			<p class="mb-0">ツカめる・ツカえる・ツカれない！出稿セールスコメント自動生成</p>
			<p class="mb-0">HPはくらべる場。一人ひとりを説得する「くらべルーム」</p>
			<p class="mb-0">問い合わせしたお客様像を推定する「アナライザー」</p>
			<footer style="color: #6c757d">クロージング支援AIシステム</footer>
		</blockquote>
		<div class="row justify-content-center">
			<a href="https://tsukamino.com/">
				<img src="{{url('../front-end/image/tsukami-logo.png')}}">
				<br>
				<h6 style="text-align: center">ツカミの達人</h6>
			</a>
		</div>
	</div>
</div>
</body>
</html>