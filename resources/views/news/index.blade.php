@section('title', 'News｜G-STAGE JAPAN株式会社')
@section('description', 'G-stage、GALLIPOLI camiceriaの新着、セールス情報、限定情報、メディア情報をいち早くお届けします！')

@include('layouts.header')
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__wide">
			<section class="l-section l-pageTop">
				<h1><span>News<span class="u-rubyBottom u-pagetop">お知らせ</span></span></h1>
				<div class="l-breadcrumb">
					<a href="{{ route('top') }}">Home</a>
					<div>News</div>
				</div>
				<div class="c-wideBanner u-MB0">
					<figure><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/page-mv-news-s.jpg') }} 375w, {{ asset('/images/page-mv-news-l.jpg') }} 768w" src="{{ asset('/images/page-mv-news-s.jpg') }}" alt="news"></figure>
				</div>
			</section>
		</div>
		<div class="l-column__nallow">
			<section class="l-section">
				<ul class="c-articleList">
					@foreach($news as $new)
					<li id="n{{ $new->id }}">
						<div>
							<div class="c-articleList__imgWrap">
								<figure><img src="{{ $new->main_img }}" alt="リニューアルオープン"></figure>
								<time>{{ $new->posted_date }}</time>
							</div>
							<div class="c-articleList__meta u-paddingSide18">
								<h3>{{ $new->title }}</h3>
								@if($new->link)
									<a href="{{ $new->link }}" target="_blank" class="u-headingLink">掲載商品の詳細はこちら</a>
								@endif
								@if($new->content)
								<p class="c-articleList__message">{{ $new->content }}</p>
								<div class="c-articleList__button">
									<div class="c-articleList__viewDetail">View Detail<span class="c-viewDetail__arrow">↓</span></div>
									<div class="c-articleList__closeDetail">Close Detail<span class="c-viewDetail__arrow">↑</span></div>
								</div>
								@endif
							</div>
						</div>
					</li>
					@endforeach
					<?php
					/*
					<li id="n4">
						<div>
							<div class="c-articleList__imgWrap">
								<figure><img src="/g-stage/images/shop.jpg" alt=""></figure>
								<time datetime="2020-02-08">2020.02.08</time>
							</div>
							<div class="c-articleList__meta u-paddingSide18">
								<h3>G-stage取り扱い店のご案内</h3>
								<p class="c-articleList__message">阪神梅田本店 6F<br>新宿小田急エース北館西<br>[オクル×シタテル Odakyu Selection]</p>
								<div class="c-articleList__button">
									<div class="c-articleList__viewDetail">View Detail<span class="c-viewDetail__arrow">↓</span></div>
									<div class="c-articleList__closeDetail">Close Detail<span class="c-viewDetail__arrow">↑</span></div>
								</div>
							</div>
						</div>
					</li>
					*/
					?>
				</ul>
				<!-- ページネーション -->
				<div class="c-pageNavi">
					@if ($news->currentPage() > 1)<a href="{{ $news->previousPageUrl() }}">←</a>@endif
					@for ($i = 1; $i <= $news->lastPage(); $i++)
						<a href="{{ $news->url($i) }}" class="{{ $news->currentPage() == $i ? 'c-currentPage' : '' }}">{{ $i }}</a>
					@endfor
					@if ($news->currentPage() < $news->lastPage())<a href="{{ $news->nextPageUrl() }}">→</a>@endif
				</div>
			</section>
		</div>
	</main>
</div>
@include('layouts.footer')