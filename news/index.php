<?php include('../component/function_path.php'); ?>
<?php include_once('../header.php'); ?>
<?php include_once('../component/function_media.php'); ?>
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__wide">
			<section class="l-section l-pageTop">
				<h1><span>News<span class="u-rubyBottom u-pagetop">お知らせ</span></span></h1>
				<div class="l-breadcrumb">
					<a href="<?php echo $root; ?>">Home</a>
					<div>News</div>
				</div>
				<div class="c-wideBanner u-MB0">
					<figure><img sizes="<?php echo $media2; ?>" srcset="<?php echo $root; ?>images/page-mv-news-s.jpg <?php echo $sp; ?>w, <?php echo $root; ?>images/page-mv-news-l.jpg <?php echo $tb; ?>w" src="<?php echo $root; ?>imagse/page-mv-news-s.jpg" alt="news"></figure>
				</div>
			</section>
		</div>
		<div class="l-column__nallow">
			<section class="l-section">
				<ul class="c-articleList">
					<li>
						<a href="#">
							<div class="c-articleList__imgWrap">
								<figure><img src="<?php echo $root; ?>images/renewal.jpg" alt=""></figure>
								<time datetime="2020-02-08">2020.02.08</time>
							</div>
							<div class="c-articleList__meta u-paddingSide18">
								<h3>ホームページリニューアルのお知らせ</h3>
								<p>いつもご利用いただき誠にありがとうございます。<br>この度、ホームページをより使いやすく快適にご利用いただけるように、ホームページのリニューアルを行いました…</p>
								<div class="c-articleList__viewDtail">View Detail<span class="c-viewDtail__arrow">↓</span></div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="c-articleList__imgWrap">
								<figure><img src="<?php echo $root; ?>images/m8.jpg" alt=""></figure>
								<time datetime="2020-02-08">2020.02.08</time>
							</div>
							<div class="c-articleList__meta u-paddingSide18">
								<h3>メディア情報 ◆ 雑誌掲載<br>「Safari3月号」に掲載されました！</h3>
								<p>“大人シャツの個性出しは刺繍柄が効く”前身頃に刺繍をあしらった大人上品なシャツ…</p>
								<div class="c-articleList__viewDtail">View Detail<span class="c-viewDtail__arrow">↓</span></div>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="c-articleList__imgWrap">
								<figure><img src="<?php echo $root; ?>images/shop.jpg" alt=""></figure>
								<time datetime="2020-02-08">2020.02.08</time>
							</div>
							<div class="c-articleList__meta u-paddingSide18">
								<h3>G-stage取り扱い店のご案内</h3>
								<p>阪神梅田本店 6F<br>新宿小田急エース北館西<br>[オクル×シタテル Odakyu Selection]</p>
								<div class="c-articleList__viewDtail">View Detail<span class="c-viewDtail__arrow">↓</span></div>
							</div>
						</a>
					</li>
				</ul>
				<div class="c-pageNavi">
					<span class="c-currentPage">1</span>
					<a href="">2</a>
					<a href="">3</a>
					<a href="">4</a>
					<a href="">5</a>
					<a href="">→</a>
				</div>
			</section>
		</div>
	</main>
</div>
<?php include_once('../footer.php'); ?>