<?php
$meta = ['title'=>'GALLIPOLI camiceria｜G-STAGE JAPAN株式会社', 'description'=>'南イタリアの港町ガリポリの陽気な空気感をイメージソースにした、＂ １枚でサマになる大人シャツ ＂をコンセプトにしたシャツブランド。シャツは全て、高松の自社シャツ専業工場が縫製するジャパンメイド。'];
?>
<?php include('../component/function_path.php'); ?>
<?php include_once('../header.php'); ?>
<?php include_once('../component/function_media.php'); ?>
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__wide">
			<section class="l-section l-pageTop">
				<h1><span class="u-LH07">GALLIPOLI<br>camiceria</span><span class="u-rubyBottom u-bottom-10 u-positionRelative u-fs07">ガリポリカミチェリア</span></h1>
				<div class="l-breadcrumb">
					<a href="<?php echo $root; ?>">Home</a>
					<div>GALLIPOLI camiceria</div>
				</div>
				<div class="c-wideBanner">
					<figure><img sizes="<?php echo $media2; ?>" srcset="<?php echo $root; ?>images/page-mv-gallipoli-s.jpg <?php echo $sp; ?>w, <?php echo $root; ?>images/page-mv-gallipoli-l.jpg <?php echo $tb; ?>w" src="<?php echo $root; ?>images/page-mv-gallipoli-s.jpg" alt=""></figure>
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
				<video src="<?php echo $root; ?>movies/gallipoli-image1.mp4" controls loop autoplay muted class="u-movie__wide"></video>
			</section>
			<div class="l-column__nallow u-paddingSideSP18">
				<section class="l-section">
					<h2><span>Coordination<span class="u-rubyBottom">コーディネーション</span></span></h2>
					<ul class="c-tile c-halfSP">
						<?php
						for ($i=1; $i<=12; $i++) {
							echo '<li class="c-fadeInImage">';
							echo '<a href="'.$root.'images/gallipoli-coordination'.$i.'-l.jpg" class="cboxGroup is-fadeInImg is-'.$i.'s">';
							echo '<figure>';
							echo '<img sizes="'.$media2.'" srcset="'.$root.'images/gallipoli-coordination'.$i.'-s.jpg '.$sp.'w, '.$root.'images/gallipoli-coordination'.$i.'-l.jpg '.$tb.'w" src="'.$root.'images/gallipoli-coordination'.$i.'-s.jpg" alt="coordination'.$i.'">';
							echo '</figure>';
							echo '</a>';
							echo '</li>';
						}
						?>
					</ul>
				</section>
			</div>
		</div>
	</main>
</div>
<?php include_once('../footer.php'); ?>