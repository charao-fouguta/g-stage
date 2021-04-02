		<div class="l-footer">
			<footer>
				<div class="l-columnRow">
					<a href="<?php echo $root; ?>" class="p-footerLogo"><figure><img src="<?php echo $root; ?>images/logo-footer.png" alt="G-Stage"></figure></a>
					<div class="p-footerAdress">
						<h3>Address</h3>
						<p>G-STAGE・JAPAN株式会社<br>〒150-0001　東京都渋谷区神宮前3-22-10 SAITO BLDG.4F-A<br>info@g-stage1967.com</p>
					</div>
					<div class="p-footerSns">
						<h3>Follow us</h3>
						<ul>
							<li><a href="https://www.instagram.com/g_stage.gallipoli/?hl=ja" target="_blank"><img src="<?php echo $root; ?>images/insta.svg" alt="instagram"></a></li>
							<li><a href="https://www.facebook.com/%EF%BC%A7%EF%BD%93%EF%BD%94%EF%BD%81%EF%BD%87%EF%BD%85-274295239367030/" target="_blank"><img src="<?php echo $root; ?>images/facebook.svg" alt="facebook"></a></li>
							<li><a href="https://www.youtube.com/channel/UCEpg8F6msuNx1HH4WLZDADg" target="_blank"><img src="<?php echo $root; ?>images/youtube.svg" alt="youtube"></a></li>
						</ul>
					</div>
				</div>
				<div class="p-footerCopy">&copy;2016 G-Stage All Right Reserved.</div>
			</footer>
		</div>
	</div>
	<script src="<?php echo $root; ?>main.js?ver=1.0.5"></script>
	<!-- validate -->
	<script src = "https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="http://parsleyjs.org/dist/parsley.js"></script>
	<script src="<?php echo $root; ?>js/lib/jquery/colorbox/jquery.colorbox.js"></script>
	<script src="<?php echo $root; ?>js/lib/jquery/colorbox/colorbox-func.js"></script>
	<script src="<?php echo $root; ?>js/lib/jquery/fade/fade.js"></script>
	<script>
		$(document).ready(function() {
			$('#validate_form').parsley();
		});
	</script>
</body>
</html>