@section('title', 'G-STAGE JAPAN株式会社　公式サイト')
@section('description', 'ファッションで人生を豊かに。大人が価値を感じる、品と遊び心が共存するファッションをアクセスしやすい価格で提供し着る人の人生をより豊かにする。ファッションの力を信じ、唯一無二の価値を創造し続けることが我々の使命です。')

@include('layouts.header')
<div class="l-main">
	<main>
		<div class="p-topMVWrapper">
			<div class="p-topMVWrapper__inner l-columnRow">
				<div class="p-topMV">
					<section>
						<h1 class="p-gStageLogo is-first"><img src="{{ asset('images/header_logo_g-stage.png') }}" alt="g-stage"></h1>
						<ul class="p-gStages is-first">
							<li class="p-gStage">
								<a href="{{ route('g-stage') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-g-stage-s4.jpg') }} 375w, {{ asset('/images/mv-g-stage-l4.jpg') }} 768w" src="{{ asset('/images/mv-g-stage-s4.jpg') }}" alt="G-stage" class="p-gStageImg">
										<figcaption><span class="p-topMVTitle">G-stage<span class="u-rubyBottomCenter u-MVrubyG-stage">ジーステージ</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
							<li class="p-gStage">
								<a href="{{ route('g-stage') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-g-stage-s3.jpg') }} 375w, {{ asset('/images/mv-g-stage-l3.jpg') }} 768w" src="{{ asset('/images/mv-g-stage-s3.jpg') }}" alt="G-stage" class="p-gStageImg">
										<figcaption><span class="p-topMVTitle">G-stage<span class="u-rubyBottomCenter u-MVrubyG-stage">ジーステージ</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
							<li class="p-gStage">
								<a href="{{ route('g-stage') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-g-stage-s2.jpg') }} 375w, {{ asset('/images/mv-g-stage-l2.jpg') }} 768w" src="{{ asset('/images/mv-g-stage-s2.jpg') }}" alt="G-stage" class="p-gStageImg">
										<figcaption><span class="p-topMVTitle">G-stage<span class="u-rubyBottomCenter u-MVrubyG-stage">ジーステージ</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
							<li class="p-gStage">
								<a href="{{ route('g-stage') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-g-stage-s1.jpg') }} 375w, {{ asset('/images/mv-g-stage-l1.jpg') }} 768w" src="{{ asset('/images/mv-g-stage-s1.jpg') }}" alt="G-stage" class="p-gStageImg">
										<figcaption><span class="p-topMVTitle">G-stage<span class="u-rubyBottomCenter u-MVrubyG-stage">ジーステージ</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
						</ul>
						<div class="p-topMVGuide is-first"><span class="p-topGuide__text">Scroll Down</span></div>
					</section>
				</div>
				<div class="p-topMV">
					<section>
						<h1 class="p-gallipoliLogo is-first"><img src="{{ asset('/images/header_logo_gallipoli.jpg') }}" alt="GALLIPOLIcamiceria"></h1>
						<ul class="p-gallipoli__ul is-first">
							<li class="p-gallipoli">
								<a href="{{ route('gallipoli') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-gallipoli-s4.jpg') }} 375w, {{ asset('/images/mv-gallipoli-l4.jpg') }} 768w" src="{{ asset('/images/mv-gallipoli-s4.jpg') }}" alt="GALLIPOLIcamiceria">
										<figcaption><span class="p-topMVTitle">GALLIPOLI<br>camiceria<span class="u-rubyBottomCenter">ガリポリカミチェリア</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
							<li class="p-gallipoli">
								<a href="{{ route('gallipoli') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-gallipoli-s3.jpg') }} 375w, {{ asset('/images/mv-gallipoli-l3.jpg') }} 768w" src="{{ asset('/images/mv-gallipoli-s3.jpg') }}" alt="GALLIPOLIcamiceria">
										<figcaption><span class="p-topMVTitle">GALLIPOLI<br>camiceria<span class="u-rubyBottomCenter">ガリポリカミチェリア</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
							<li class="p-gallipoli">
								<a href="{{ route('gallipoli') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-gallipoli-s2.jpg') }} 375w, {{ asset('/images/mv-gallipoli-l2.jpg') }} 768w" src="{{ asset('/images/mv-gallipoli-s2.jpg') }}" alt="GALLIPOLIcamiceria">
										<figcaption><span class="p-topMVTitle">GALLIPOLI<br>camiceria<span class="u-rubyBottomCenter">ガリポリカミチェリア</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
							<li class="p-gallipoli">
								<a href="{{ route('gallipoli') }}">
									<figure>
										<img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/mv-gallipoli-s1.jpg') }} 375w, {{ asset('/images/mv-gallipoli-l1.jpg') }} 768w" src="{{ asset('/images/mv-gallipoli-s1.jpg') }}" alt="GALLIPOLIcamiceria">
										<figcaption><span class="p-topMVTitle">GALLIPOLI<br>camiceria<span class="u-rubyBottomCenter">ガリポリカミチェリア</span></span><span class="p-topMVTitle__bottom">VIEW MORE</span></figcaption>
									</figure>
								</a>
							</li>
						</ul>
						<div class="p-topMVGuide guideB is-first"><span class="p-topGuide__text">Scroll Down</span></div>
					</section>
				</div>
			</div>
		</div>
		<div class="l-column__nallow u-paddingSideTB50">
			<a href="{{ route('news') }}" class="c-newsGuide">View All<span></span></a>
			<section class="l-section">
				<h2><span class="is-fadeToBottom">News<span class="u-rubyBottom">お知らせ</span></span></h2>
				<ul class="l-parallel l-overFlow c-media3column">
					@foreach($news as $new)
					<li>
						<a href="{{ route('news') }}/#n{{ $new->id }}">
							<figure><img src="{{ $new->main_img }}" alt="{{ $new->title }}"></figure>
							<div class="u-paddingWithoutTop18">
								<time datetime="{{ $new->posted_date }}">{{ $new->posted_date }}</time>
								<h3>{{ $new->title }}</h3>
								<p>掲載商品の詳細はこちら</p>
							</div>
						</a>
					</li>
					@endforeach
				</ul>
			</section>
		</div>
		<div class="l-column__wide">
			<section class="l-section">
				<div class="c-wideBanner">
				<h2><span class="is-fadeToBottom u-positionCenter u-specialFont1">Corporate vision<span class="u-rubyBottom">企業理念</span></span></h2>
					<figure><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/vision1-s.jpg') }} 375w, {{ asset('/images/vision1-l.jpg') }} 768w" src="{{ asset('/images/vision1-s.jpg') }}" alt=""></figure>
				</div>
				<div class="l-column__nallow c-passage">
					<h3>Change your life<br>ファッションで人生を豊かに</h3>
					<p class="u-paragraphDash110">大人が価値を感じる、品と遊び心が共存する<br>ファッションをアクセスしやすい価格で提供し<br>着る人の人生をより豊かにする</p>
					<p>ファッションの力を信じ、唯一無二の価値を創造<br>し続けることが我々の使命です</p>
				</div>
				<div class="l-column__nallow c-parallelBanner u-paddingSideSP18">
					<figure class="c-parallelBanner__figure u-fadeImgWrap"><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/510705_1m6-s.jpg') }} 375w, {{ asset('/images/510705_1m6-l.jpg') }} 768w" src="{{ asset('/images/510705_1m6-s.jpg') }}" alt="" class="is-fadeToBottomImg c-parallelBanner__img"></figure>
					<figure class="c-parallelBanner__figure u-fadeImgWrap"><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/510662_2-s.jpg') }} 375w, {{ asset('/images/510662_2-l.jpg') }} 768w" src="{{ asset('/images/510662_2-s.jpg') }}" alt="" class="is-fadeToTopImg c-parallelBanner__img"></figure>
				</div>
			</section>
		</div>
		<div class="l-column__nallow u-paddingSideTB50">
			<section class="l-section">
				<h2><span class="is-fadeToBottom">Instagram<span class="u-rubyBottom">インスタグラム</span></span></h2>
				<ul class="c-tile">
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-1s"><figure><img src="images/insta1-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-2s"><figure><img src="images/insta2-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-3s"><figure><img src="images/insta3-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-4s"><figure><img src="images/insta4-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-5s"><figure><img src="images/insta5-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-6s"><figure><img src="images/insta6-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-7s"><figure><img src="images/insta7-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-8s"><figure><img src="images/insta8-s.jpg" alt=""></figure></a></li>
					<li class="c-fadeInImage"><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank" class="is-fadeInImg is-9s"><figure><img src="images/insta9-s.jpg" alt=""></figure></a></li>
				</ul>
			</section>
		</div>
		<div class="l-column__nallow u-paddingSideTB50">
			<section class="l-section">
				<h2><span class="is-fadeToBottom">Check it out!</span></h2>
				<div class="c-passage">
					<p class="c-lessSpace">G-stageでは、SNSで入荷情報など最旬の情報を発信しております。<br>ぜひチェックしてみてください！</p>
				</div>
				<ul class="l-parallel c-mediaColumnRow u-sns">
					<li>
						<a href="https://www.youtube.com/channel/UCEpg8F6msuNx1HH4WLZDADg" target="_blank">
							<figure class="c-fadeInImage2"><img size="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/youtube-s.jpg') }} 375w, {{ asset('/images/youtube-l.jpg') }} 768w" src="{{ asset('/images/youtube-s.jpg') }}" alt="YouTube" class="is-fadeInImg2 is-1s"></figure>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank">
							<figure class="c-fadeInImage2"><img size="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/insta-s.jpg') }} 375w, {{ asset('/images/insta-l.jpg') }} 768w" src="{{ asset('/images/insta-s.jpg') }}" alt="Instagram" class="is-fadeInImg2 is-3s"></figure>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/%EF%BC%A7%EF%BD%93%EF%BD%94%EF%BD%81%EF%BD%87%EF%BD%85-274295239367030/" target="_blank">
							<figure class="c-fadeInImage2"><img size="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/facebook-s.jpg') }} 375w, {{ asset('/images/facebook-l.jpg') }} 768w" src="{{ asset('/images/facebook-s.jpg') }}" alt="Facebook" class="is-fadeInImg2 is-7s"></figure>
						</a>
					</li>
				</ul>
			</section>
		</div>
	</main>
</div>
@include('layouts.footer')
