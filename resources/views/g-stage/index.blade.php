@section('title', 'G-stage｜G-STAGE JAPAN株式会社')
@section('description', '＂ 気軽に着れる大人男の品ある遊び服 ＂ベーシックに軸足を置きながら、上質な素材と時代性ある遊び心をMIXさせた、大人に相応しい艶感と品あるデイリーカジュアルを展開。')

@include('layouts.header')
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__wide">
			<section class="l-section l-pageTop">
				<h1><span>G-stage<span class="u-rubyBottom u-pagetop">ジーステージ</span></span></h1>
				<div class="l-breadcrumb">
					<a href="{{ route('top') }}">Home</a>
					<div>G-stage</div>
				</div>
				<div class="c-wideBanner">
					<figure><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/page-mv-g-stage-s.jpg') }} 375w, {{ asset('/images/page-mv-g-stage-l.jpg') }} 768w" src="{{ asset('images/page-mv-g-stage-s.jpg') }}" alt="G-stage"></figure>
				</div>
				<div class="l-columnRow l-column__nallow c-passage__pattern2 u-flexHalf__PC">
					<div>
						<h2>Traditional and Modern<br>Function and Fashion</h2>
						<p>「伝統と現代性」「機能性とファッション性」</p>
					</div>
					<p>＂ 気軽に着れる大人男の品ある遊び服 ＂<br>ベーシックに軸足を置きながら、上質な素材と時代性ある遊び心をMIXさせた、大人に相応しい<br>艶感と品あるデイリーカジュアルを展開。</p>
				</div>
				<video src="/g-stage/movies/g-stage-image1.mp4" controls loop autoplay muted class="u-movie__wide"></video>
			</section>
			<div class="l-column__nallow u-paddingSideSP18">
				<section class="l-section">
					<h2><span>Coordination<span class="u-rubyBottom">コーディネーション</span></span></h2>
					<ul class="c-tile c-halfSP">
						<script>
						let tile = document.querySelector('.c-tile');
						for (var i=1; i<=12; i++) {
							tile.insertAdjacentHTML('beforeend', '<li class="c-fadeInImage"><a href="{{ asset('/images/g-stage-coordination') }}'+i+'-l.jpg" class="cboxGroup is-fadeInImg is-'+i+'s"><figure><img sizes="(max-width:375px), (min-width:768px)" srcset="{{ asset('/images/g-stage-coordination') }}'+i+'-s.jpg 375w, {{ asset('/images/g-stage-coordination') }}'+i+'-l.jpg 768w" src="{{ asset('/images/g-stage-coordination') }}'+i+'-s.jpg" alt="coordination'+i+'"></figure></a></li>');
						}
						</script>
					</ul>
				</section>
			</div>
		</div>
	</main>
</div>
@include('layouts.footer')