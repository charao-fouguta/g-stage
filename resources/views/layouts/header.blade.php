<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<meta name="description" content="">
	<link rel="stylesheet" href="{{ asset('css/style.css?ver=1.0.6') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<link rel="icon" type="image/x-icon" href="{{ asset('images/logo-black.png?20210330') }}">
	<script>document.createElement( "picture" );</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/picturefill/3.0.2/picturefill.min.js" async></script>
</head>
<body>
	<div class="l-wrapper">
		<div class="l-header">
			<header>
				<div class="l-header__inner">
					<a href="{{ route('top') }}" class="l-header__logo"></a>
					<div class="l-header__guide">OPEN MENU</div>
					<div class="l-header__hamburger"></div>
					<div class="l-header__nav">
						<nav>
							<ul class="l-header__navList">
								<li><a href="{{ route('top') }}">Home<span>ホーム</span></a></li>
								<li><a href="{{ route('g-stage') }}">G-stage<span>ジーステージ</span></a></li>
								<li><a href="{{ route('gallipoli') }}" class="u-header__LH05">GALLIPOLI<br>camiceria<span>ガリポリカミチェリア</span></a></li>
								<li><a href="{{ route('news') }}">News<span>お知らせ</span></a></li>
								<li><a href="{{ route('store') }}">Store<span>店舗一覧</span></a></li>
								<li><a href="{{ route('about') }}">About<span>私たちについて</span></a></li>
								<li><a href="mailto:info@g-stage1967.com">Contact<span>お問い合わせ</span></a></li>
							</ul>
						</nav>
						<div class="l-header__outerLinks">
							<ul class="l-header__sns">
								<li><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank"><img src="{{ asset('images/insta.svg') }}" alt="instagram"></a></li>
								<li><a href="https://www.facebook.com/%EF%BC%A7%EF%BD%93%EF%BD%94%EF%BD%81%EF%BD%87%EF%BD%85-274295239367030/" target="_blank"><img src="{{ asset('images/facebook.svg') }}" alt="facebook"></a></li>
								<li><a href="https://www.youtube.com/channel/UCEpg8F6msuNx1HH4WLZDADg" target="_blank"><img src="{{ asset('images/youtube.svg') }}" alt="youtube"></a></li>
							</ul>
							<a href="https://www.g-stage-select.jp/" class="l-header__shop">Online Shop</a>
						</div>
					</div>
				</div>
			</header>
		</div>