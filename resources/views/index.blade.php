<html>
<head>
	<title>Ads test</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('../front-end/css/style-res.css')}}">
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
</head>
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
				<div class="row">
					<div class="col-12 embed-responsive embed-responsive-16by9"><iframe src="https://docs.google.com/presentation/d/e/2PACX-1vTZpzjMkyQ3iAGIUZF0XjtmEEQs9DO2rTg0iI3P49jx0WBn0Z3RelgxNYuj2Xg11udiJDaJ0c8CacmT/embed?start=false&loop=true&delayms=60000" frameborder="0" width="560" height="315" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h4>ジラフル、クリエイティブAIをアドネットワークに適用した「デジタル自動追客」でWEB広告配信事業に参入</h4>
						<h6>GRFL通信</h6>
						<p>　ジラフルの吉澤宏充社長はGRFL通信のインタビューに応じ、2020年度からクリエイティブAIをアドネットワークに適用した「デジタル自動追客」を提供し、WEB広告配信事業に参入する考えを明らかにした。<br>現行のサービスはいずれもECサイト離脱者へのクロスセル（別アイテム再購入）、アップセル（高額バージョンの購入）を促す「代替提案」型の設計
							がなされており、不動産などの高級商材においては再び目移りさせてしまうため、現行のサービスはかえって逆効果となっていると指摘。<br>株式会社GFLが開発した物件ごとの膨大な事実属性情報を元に数百兆パターン（理論値）のキャッチコピーを自動生成する不動産データフィードエンジンを応用し、まずは不動産クロージングに特化したダイナミックリターゲティング広告事業を展開する。<br>事業開始に向けた準備については「順調に進んでいる」とした上で、「個人情報が絡むサービスなので万全には万全を期し、二重三重四重の手立てを打って、安定的なサービスを提供できるように頑張りたい」との意気込みを語った。</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<button class="btn btn-primary" style="border-radius: 20px;">ココがポイント</button>
					</div>
					<br>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 border-left">
						<h5>GiRAFFE&Co.とGFLが合弁会社設立を締結</h5>
						<h6>出典：GRFL通信</h6>
					</div>
					<br>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 border-left">
						<h5>GFL、不動産専用の営業支援プログラム「ツカミの達人」を正式リリース</h5>
						<h6>出典：GRFL通信</h6>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center" id="ads-patern">
					<div>
						<h6><b>広告エリア</b></h6>
					</div>
					<div class="wrapper2" style="height: 250px">
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
												<?php foreach ($saleTalk as $saleTalk) {
													echo round($saleTalk->price_1/10, 2) . "万円";
													echo 'の';
													echo $saleTalk->floor_plan;
													echo $saleTalk->property_category;
												}
												?>
											</span>
											<br>
											<span style="font-size: 1.2rem">
												<?php 
												echo $saleTalk->train_subway_station_1;

												?>徒歩10分
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
												<?php 
												echo round($saleTalk->price_1/10, 2) . "万円";
												echo 'の';
												echo $saleTalk->floor_plan;
												echo $saleTalk->property_category;

												?>
												<!-- 3,200万円の中古/2LDK -->
											</span>
											<br>
											<span style="font-size: 1.2rem">
												<?php 
												echo $saleTalk->train_subway_station_1;

												?>徒歩10分
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
												<?php 
												echo round($saleTalk->price_1/10, 2) . "万円";
												echo 'の';
												echo $saleTalk->floor_plan;
												echo $saleTalk->property_category;

												?>
											</span>
											<br>
											<span style="font-size: 1.2rem">
												<?php 
												echo $saleTalk->train_subway_station_1;

												?>徒歩10分
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
					<br>
					<div id="wrapper">
						<div class="popup">
							<div class="header-bar">
								<h4>冢美農不動産</h4>
							</div>
							<div class="new-mess">
								<p>新着メッセージが<br>
								あります！！！</p>
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
						<div class="action-button" style="background-color: #ffc107; display: flex;">
							<div class="overal">
								<p>
									<span style="font-size: 0.9rem">
										<?php
										echo round($saleTalk->price_1/10, 2) . "万円";
										echo 'の';
										echo $saleTalk->floor_plan;
										echo $saleTalk->property_category;

										?>
									</span>
									<br>
									<span style="font-size: 1.2rem">
										<?php 
										echo $saleTalk->train_subway_station_1;

										?>徒歩10分
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
	<div class="contents">
		<div class="container content">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<div class="row border-bottom">
						<h4>コメントを書く</h4>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 list-suggest-news">
					<ul class="list-group-flush border-bottom">
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/tatsuo.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph">
										<p>この商品は関心の高まっているHOT層に的を絞り、ディスプレイ広告で特定の関心物件の未知の魅力を「キャッチコピー」で多面的に繰り返し訴求し、ユーザーを口説き落とす（＝問い合わせさせる）とのこと。
											不動産広告主にとっては利益に直結する、最も確実で効率的なマーケティング手段となることが期待できます。
										</p>
										<div class="short-paragraph text-right">
											<img src="{{url('../front-end/image/like.png')}}" style="height: 20px; width: 20px;"><span style="color: gray;">226</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/tatsuko.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph">
										<p>ダイナミックリターゲティングといえばCriteoというフランスの会社が世界を席巻してます。次いで、Googleやyahooが追従。
											最近ではポーランド企業であるRTBhouseが市場を賑わしてます。
										日本の企業にも頑張ってもらいたいので、まずは日本で成功してもらい海外に打って出る企業に成長して欲しいですね。</p>
										<div class="short-paragraph text-right">
											<img src="{{url('../front-end/image/like.png')}}" style="height: 20px; width: 20px;"><span style="color: gray;">111</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/g_s.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph">
										<p>国内のデータフィード広告市場は1,029億円(2019年) 前年比+15-20%程度で安定成長しており、不動産データフィード広告市場は176億円(2019年) とデータフィード広告の17%を構成。
										市場は今後も成長すると思われるので、スピーディな事業展開が事業成功の鍵を握りますね。</p>
										<div class="short-paragraph text-right">
											<img src="{{url('../front-end/image/like.png')}}" style="height: 20px; width: 20px;"><span style="color: gray;">113</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="list-group-item text-center" style="background-color: #e3f2ff; padding: 15px;">
							<a href="#">もっと見る 626件</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center" id="ads-patern">

				</div>
			</div>
		</div>
	</div>
	<div class="contents">
		<div class="container content">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<div class="row border-bottom">
						<h4>あなたにおすすめの記事</h4>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 list-suggest-news">
					<ul class="list-group-flush border-bottom">
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/giraffe-logo.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph" style="color: black;">
										<h6>WEBマーケティングを得意領域とするGiRAFFE&Co.とテクノロジーを駆使したコンテンツおよびソリューション開発を得意とするGFLの２社がジョイントベンチャー『株式会社ジラフル』を設立</h6>
									</div>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/thinking.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph" style="color: black;">
										<h6>「現在のダイナミックリターゲティングは、代替選択肢を提示するため高級商材のクロージングには逆効果
										</h6>
									</div>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/idea.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph" style="color: black;">
										<h6>ジラフルのダイナミックリターゲティングは、ユーザーの関心が高い特定の商材の魅力を「キャッチコピー」で多面的に繰り返し訴求し口説き落とすことが可能</h6>
									</div>
									<div class="banner-image hidden-ls hidden-xl">
										<img src="{{url('../front-end/image/banner-image.png')}}" style="width: 300px; height: 250px;">
									</div>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/chart.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph" style="color: black;">
										<h6>2018年度のインターネット広告国内市場規模は約1.6兆円、2023年度には約2.8兆円まで拡大を予測</h6>
									</div>
								</div>
							</a>
						</li>
						<li class="list-group-item">
							<a href="#" style="display: flex;">
								<div><img class="suggest-news" src="{{url('../front-end/image/tatsuo.png')}}"></div>
								<div class="sub-news">
									<div class="short-paragraph" style="color: black;">
										<h6>ツカミの達人はクロージング支援AIシステムです。駆け出し営業マンをベテランに、ベテラン営業マンをスーパー営業マンにするお手伝いをします。</h6>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center" id="ads-patern">
				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="contents">
		<div class="container content">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8">
					<div class="row border-bottom">
						<h4>ツカミの達人のセールスコメントを動画で解説！</h4>
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

				</div>
			</div>
		</div>
	</div>
	<br>
	<div class="footer">
		<div class="container">
			<blockquote class="blockquote text-center">
				<p class="mb-0" style="border-top: solid;">Copyright © 株式会社ジラフル All Rights Reserved.</p>
			</blockquote>
		</div>
	</div>
</body>
</html>