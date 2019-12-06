<html>
<header>
	<title>Ads test</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/ads-frame.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/patern1-frame.css')}}">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		var salesSen1 			= {!! json_encode($salesComment1[0]->salestalk) !!},
		salesSen2 			= {!! json_encode($salesComment1[1]->salestalk) !!},
		salesSen3 			= {!! json_encode($salesComment1[2]->salestalk) !!},
		salesSen4 			= {!! json_encode($salesComment1[3]->salestalk) !!},
		salesSen5 			= {!! json_encode($salesComment1[4]->salestalk) !!},
		sales2Sen1 			= {!! json_encode($salesComment2[0]->salestalk) !!},
		station 			= {!! json_encode($saleTalk[0]->train_subway_station_1) !!},
		floor_plan 			= {!! json_encode($saleTalk[0]->floor_plan) !!},
		property_category 	= {!! json_encode($saleTalk[0]->property_category) !!};
	</script>
	<script type="text/javascript" src="{{url('../front-end/js/ads-frame.js')}}"></script>
</header>
<body>
	<div class="header" style="display: inline !important;">
		<div class="container">
			<div class="row top-banner">
				<img style="width: 70%; height: 80px" src="{{url('../front-end/image/Tsukapotaheaderpng.png')}}">
			</div>
			<div class="row border search-form">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="今どんな気持ち？">
					<button class="btn btn-primary">
						検索
					</button>
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-2" style="padding-left: 0px; padding-right: 0px;">
					<div class="row">
						<div class="col">
							<ul class="list-group-flush border" id="list-top-news"  style="padding-left: 0px; padding-right: 0px;">
								<li class="list-group-item">
									<a href="#">ツカミの達人</a>
								</li>
								<li class="list-group-item">
									<a href="#">不動産営業支援版</a>
								</li>
								<li class="list-group-item">
									<a href="#">セールスコメント</a>
								</li>
								<li class="list-group-item">
									<a href="#">くらべルーム機能</a>
								</li>
								<li class="list-group-item">
									<a href="#">アナライザー機能</a>
								</li>
							</ul>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<ul class="list-group-flush border" id="list-top-news"  style="padding-left: 0px; padding-right: 0px;">
								<li class="list-group-item">
									<a href="#">ツカミの達人</a>
								</li>
								<li class="list-group-item">
									<a href="#">不動産営業支援版</a>
								</li>
								<li class="list-group-item">
									<a href="#">セールスコメント</a>
								</li>
								<li class="list-group-item">
									<a href="#">くらべルーム機能</a>
								</li>
								<li class="list-group-item">
									<a href="#">アナライザー機能</a>
								</li>
							</ul>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<blockquote class="embedly-card" data-card-controls="0"><h4><a href="http://www.gutfeelinglab.com/">株式会社GFL</a></h4><p>株式会社GFLのコンセプト紹介ページ。ニューロマーケティングで培った知見とテクノロジーの力で人間の無意識「なんとなく」を覚醒めさせることをミッションとする。</p></blockquote>
							<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="border">
						<div class="row">
							<nav class="navbar navbar-expand-lg">
								<div class="collapse navbar-collapse" id="navbarNav" style="background-color: #f1f5ff;">
									<ul class="navbar-nav">
										<li class="nav-item active" style="background-color: #fff">
											<a class="nav-link" href="#">不動産 <span class="sr-only">(current)</span></a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">経済</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">エンタメ</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">スポーツ</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">国内</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">国際</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">IT</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">科学</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">地域</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#"> ニュース</a>
										</li>
										<li class="nav-item" style="background-color: #f1f5ff;">
											<a class="nav-link" href="#">政治</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="row">
							<div class="col-8">
								<ul class="list-group-flush" id="list-top-news" style="padding-left: 10px">
									<li>
										<a href="#"><h6>ツカミの達人はクロージング支援AIシステムです</h6></a>
									</li>
									<li>
										<a href="#"><h6>ツカミの達人　不動産営業支援版</h6></a>
									</li>
									<li>
										<a href="#"><h6>ツカめる・ツカえる・ツカれない！出稿セールスコメント自動生成機能</h6></a>
									</li>
									<li>
										<a href="#"><h6>HPはくらべる場。一人ひとりを説得する「くらべルーム」機能</h6></a>
									</li>
									<li>
										<a href="#"><h6>問い合わせしたお客様像を推定する「アナライザー」機能</h6></a>
									</li>
								</ul>
							</div>
							<div class="col-4 justify-content-center">
								<img class="border border-primary" style="width: 150px; margin-top: 15px" src="{{url('../front-end/image/top-news.png')}}">
							</div>
						</div>
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col">
							<a href="#">動画でツカミの達人を理解</a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/ngKkwlmo1Xc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col">
							<div class="row border-bottom">
								<a href="#">オススメ記事</a>
							</div>
						</div>
					</div>
					<br>
					<div class="row border">
						<div class="col list-suggest-news border-primary">
							<ul class="list-group-flush" style="list-style-type: none; padding-left: 20px">
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
								<li>
									<a href="#" style="display: flex;">
										<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
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
					</div>
				</div>
				<div class="col-4"  id="ads-patern">
					<div class="row">
						<div class="col text-center border ads-area" style="height: 850px;">
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
									<?php foreach ($saleTalk as $saleTalk) {
										echo '<span class="comment_1">';
										echo $saleTalk->train_subway_station_1;
										echo round($saleTalk->price_1/10000, 2) . "万円";
										echo 'の';
										echo $saleTalk->floor_plan;
										echo $saleTalk->property_category;
										echo '</span>';
										echo '、';
										echo '<span class="comment_2">';
										echo $saleTalk->sentence_content;
										echo '</span>';
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
							<br>
							<div id="wrapper">
								<div class="popup">
									<div class="header-bar">
										<h4>冢美農不動産</h4>
									</div>
									<div class="new-mess">
										<p>新着メッセージが<br>
										あります！！！</p>
										<!-- <?php 
											print($salesComment1[0]->salestalk);
											print($salesComment1[1]->salestalk);
											print($salesComment1[2]->salestalk);
											print($salesComment1[3]->salestalk);
											print($salesComment1[4]->salestalk); ?> -->
										</div>
									</div>
									<div class="chat">
										<div class="chat-container">
											<div class="chat-listcontainer">
												<ul class="chat-message-list">
												</ul>
											</div>
										</div>
									</div>
									<div class="action-button">
										<div class="button-container">
											<a href="#" class="btn-square-slant detail">内覧予約</a>
											<a href="#" class="btn-square-slant reservation">物件詳細</a>
										</div>
									</div>
								</div>
								<br>
								<div class="wrapper2">
									<div class="frame frame-1">
										<div class="test-ads2 border">
											<div class="test-ads-overlay2">
											</div>
											<div class="text-wraper">
												<p class="sales-comment2">
												大宮駅徒歩10分の物件！</p>
											</div>
											<div class="test-ads-logo">
												<img src="{{url('../front-end/image/logo.png')}}">
											</div>
											<div class="under-bar">
												<div class="overal">
													<p>
														<span style="font-size: 0.9rem">
															3,200万円の中古/2LDK
														</span>
														<br>
														<span style="font-size: 1.2rem">
															大宮駅徒歩10分
														</span>
													</p>
												</div>
												<div class="link">
													<a href="">詳細>></a>
												</div>
											</div>
										</div>
									</div>
									<div class="frame frame-2">
										<div class="test-ads2 border">
											<div class="test-ads-overlay2">
											</div>
											<div class="text-wraper">
												<p class="sales-comment2">
													日当たり良好！
													<br>
													広々した８畳のリビング
												</p>
											</div>
											<div class="test-ads-logo">
												<img src="{{url('../front-end/image/logo.png')}}">
											</div>
											<div class="under-bar">
												<div class="overal">
													<p>
														<span style="font-size: 0.9rem">
															3,200万円の中古/2LDK
														</span>
														<br>
														<span style="font-size: 1.2rem">
															大宮駅徒歩10分
														</span>
													</p>
												</div>
												<div class="link">
													<a href="">詳細>></a>
												</div>
											</div>
										</div>
									</div>
									<div class="frame frame-3">
										<div class="test-ads2 border">
											<div class="test-ads-overlay2">
											</div>
											<div class="text-wraper">
												<p class="sales-comment2">
													浴室乾燥機・追い炊き付き
													<br>
												機能性溢れる浴室</p>
											</div>
											<div class="test-ads-logo">
												<img src="{{url('../front-end/image/logo.png')}}">
											</div>
											<div class="under-bar">
												<div class="overal">
													<p>
														<span style="font-size: 0.9rem">
															3,200万円の中古/2LDK
														</span>
														<br>
														<span style="font-size: 1.2rem">
															大宮駅徒歩10分
														</span>
													</p>
												</div>
												<div class="link">
													<a href="">詳細>></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col">
								<a href="#">メディア</a>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-4 text-center">
								<div>
									<img style="width: 64px;" src="{{url('../front-end/image/phone.png')}}">
								</div>
								<br>
								<div>
									<a href="">通話</a>
								</div>
							</div>
							<div class="col-4 text-center">
								<div>
									<img style="width: 64px;" src="{{url('../front-end/image/facebook.png')}}">
								</div>
								<br>
								<div>
									<a href="">Facebook</a>
								</div>
							</div>
							<div class="col-4 text-center">
								<div>
									<img style="width: 64px;" src="{{url('../front-end/image/twitter.png')}}">
								</div>
								<br>
								<div>
									<a href="">Twitter</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col text-center">
								<blockquote class="twitter-tweet"><p lang="ja" dir="ltr">多様な住まい、多様な探し方。<br><br>2019年11月、ブレードランナーの世界にはちょっと辿り着かなかったけど、テックの助けで見つけたいお家の探し方も色々。<br><br>ゴーグル付けて、脳内回路、繋がるかな？<a href="https://t.co/gz84ilPfBl">https://t.co/gz84ilPfBl</a></p>&mdash; ツカミの達人 (@tsukatatz) <a href="https://twitter.com/tsukatatz/status/1191545940089270272?ref_src=twsrc%5Etfw">November 5, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col text-center">
								<iframe class="border-bottom" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Ftatsuototatsuko%2Fposts%2F117869832958850&width=350" width="350" height="410" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="footer">
			<div class="container border">
				<blockquote class="blockquote text-center" style="font-size: 0.8rem; margin-bottom: 0px;">
					ツカめる・ツカえる・ツカれない！出稿セールスコメント自動生成<br>
					HPはくらべる場。一人ひとりを説得する「くらべルーム」<br>
					問い合わせしたお客様像を推定する「アナライザー」<br>
					<footer style="color: #6c757d">クロージング支援AIシステム</footer>
				</blockquote>
				<div class="row justify-content-center">
					<a href="https://tsukamino.com/">
						<img style="width: 150px" src="{{url('../front-end/image/tsukami-logo.png')}}">
					</a>
				</div>
			</div>
		</div>
	</body>
	</html>