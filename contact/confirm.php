<?php include('../component/function_path.php'); ?>
<?php include_once('../header.php'); ?>
<?php include_once('../component/function_media.php'); ?>
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__nallow u-paddingSide18">
			<section class="l-section l-pageTop">
				<h1><span>Contact<span class="u-rubyBottom u-pagetop">お問い合わせ_確認</span></span></h1>
				<div class="l-breadcrumb">
					<a href="<?php echo $root; ?>">Home</a>
					<div>Contact</div>
				</div>
				<div class="p-form__guide">
					<p>入力内容をご確認の上、送信してください。</p>
				</div>
				<form action="./complete.php" method="post">
					<div class="p-form__input">
						<p class="p-form__title">お名前<span class="u-caution">※</span></p>
						<input type="text" name="name" readonly class="p-form__name">
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<p class="p-form__title">電話番号</p>
						<input type="text" name="tel" readonly class="p-form__tel">
						<p class="p-form__title">メールアドレス<span class="u-caution">※</span></p>
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<input type="text" name="mail" readonly class="p-form__mail">
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<p class="p-form__title">お問い合わせ内容<span class="u-caution">※</span></p>
						<textarea name="message" readonly rows="10"></textarea>
						<div class="p-form__caution">※この項目は必須事項です。</div>
					</div>
					<div class="p-form__submission c-button__short"><input type="submit" value="send" ></div>
				</form>
			</section>
		</div>
	</main>
</div>
<?php include_once('../footer.php'); ?>