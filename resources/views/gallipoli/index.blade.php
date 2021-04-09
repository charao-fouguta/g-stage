<!--$meta = ['title'=>'GALLIPOLI camiceria｜G-STAGE JAPAN株式会社', 'description'=>'南イタリアの港町ガリポリの陽気な空気感をイメージソースにした、＂ １枚でサマになる大人シャツ ＂をコンセプトにしたシャツブランド。シャツは全て、高松の自社シャツ専業工場が縫製するジャパンメイド。'];-->
@include('layouts.header')
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__wide">
			<section class="l-section l-pageTop">
				<h1><span class="u-LH07">GALLIPOLI<br>camiceria</span><span class="u-rubyBottom u-bottom-10 u-positionRelative u-fs07">ガリポリカミチェリア</span></h1>
				<div class="l-breadcrumb">
					<a href="{{ route('top') }}">Home</a>
					<div>GALLIPOLI camiceria</div>
				</div>
				<div class="c-wideBanner">
					<figure><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/page-mv-gallipoli-s.jpg') }} 375w, {{ asset('/images/page-mv-gallipoli-l.jpg') }} 768w" src="{{ asset('/images/page-mv-gallipoli-s.jpg') }}" alt=""></figure>
				</div>
				<div class="l-columnRow l-column__nallow c-passage__pattern2 u-flexHalf__PC">
					<div>
						<div>
							<h2 class="u-flexHalfHeading">glare of the sun<br> and clear‐blue sea<br>cheerful people</h2>
							<p>照りつける太陽や爽快な空、青く澄んだ海、<br>そして街を行き交う陽気な人々。</p>
						</div>
					</div>
					<p>南イタリアの港町ガリポリの陽気な空気感をイメージソースにした、<br>＂ １枚でサマになる大人シャツ ＂をコンセプトにしたシャツブランド。<br>シャツは全て、高松の自社シャツ専業工場が縫製するジャパンメイド。</p>
				</div>
				<video src="/g-stage/movies/gallipoli-image1.mp4" controls loop autoplay muted class="u-movie__wide"></video>
			</section>
			<div class="l-column__nallow u-paddingSideSP18">
				<section class="l-section">
					<h2><span>Coordination<span class="u-rubyBottom">コーディネーション</span></span></h2>
					<ul class="c-tile c-halfSP">
						<script>
						let tile = document.querySelector('.c-tile');
						for (var i=1; i<=12; i++) {
							tile.insertAdjacentHTML('beforeend', '<li class="c-fadeInImage"><a href="{{ asset('/images/gallipoli-coordination') }}'+i+'-l.jpg" class="cboxGroup is-fadeInImg is-'+i+'s"><figure><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/gallipoli-coordination') }}'+i+'-s.jpg 375w, {{ asset('/images/gallipoli-coordination') }}'+i+'-l.jpg 768w" src="{{ asset('/images/gallipoli-coordination') }}'+i+'-s.jpg" alt="coordination'+i+'"></figure></a></li>');
						}
						</script>
					</ul>
				</section>
			</div>
		</div>
	</main>
</div>
@include('layouts.footer')