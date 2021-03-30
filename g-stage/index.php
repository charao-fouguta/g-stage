<?php include('../component/function_path.php'); ?>
<?php include_once('../header.php'); ?>
<?php include_once('../component/function_media.php'); ?>
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__wide">
			<section class="l-section l-pageTop">
				<h1><span>G-stage<span class="u-rubyBottom u-pagetop">ジーステージ</span></span></h1>
				<div class="l-breadcrumb">
					<a href="<?php echo $root; ?>">Home</a>
					<div>G-stage</div>
				</div>
				<div class="c-wideBanner">
					<figure><img sizes="<?php echo $media2; ?>" srcset="<?php echo $root; ?>images/page-mv-g-stage-s.jpg <?php echo $sp; ?>w, <?php echo $root; ?>images/page-mv-g-stage-l.jpg <?php echo $tb; ?>w" src="<?php echo $root; ?>imagse/page-mv-g-stage-s.jpg" alt=""></figure>
				</div>
				<div class="l-columnRow l-column__nallow c-passage__pattern2 u-flexHalf__PC">
					<div>
						<h2>Traditional and Modern<br>Function and Fashion</h2>
						<p>「伝統と現代性」「機能性とファッション性」</p>
					</div>
					<p>「伝統と現代性」「機能性とファッション性」を融合し“遊び心”のスパイスをきかせた大人のドレスポスタイルを提案。<br>特に、こだわりの生地を使ったジャケットとカジュアルアウターをコアに上質で洗練された大人のドレスポスタイルをトータルに展開。</p>
				</div>
				<video src="<?php echo $root; ?>movies/g-stage-image1.mp4" controls loop autoplay muted class="u-movie__wide"></video>
			</section>
			<div class="l-column__nallow u-paddingSideSP18">
				<section class="l-section">
					<h2><span>Coordination<span class="u-rubyBottom">コーディネーション</span></span></h2>
					<ul class="c-tile c-halfSP">
						<?php
						for ($i=1; $i<=12; $i++) {
							echo '<li class="c-fadeInImage">';
							echo '<a href="'.$root.'images/g-stage-coordination'.$i.'-l.jpg" class="cboxGroup is-fadeInImg is-'.$i.'s">';
							echo '<figure>';
							echo '<img sizes="'.$media2.'" srcset="'.$root.'images/g-stage-coordination'.$i.'-s.jpg '.$sp.'w, '.$root.'images/g-stage-coordination'.$i.'-l.jpg '.$tb.'w" src="'.$root.'images/g-stage-coordination'.$i.'-s.jpg" alt="">';
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