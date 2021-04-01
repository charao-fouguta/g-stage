<?php include('../component/function_path.php'); ?>
<?php include_once('../header.php'); ?>

<?php session_start();

require_once 'SendEmail.php';

if (isset($_POST) && count($_POST) > 0) {

    if ( isset($_POST['send']) ) {
        $mail = new SendEmail;

        $sendAdmin = $mail->sendContactToAdmin($_SESSION['contact']);
        $sendUser = $mail->sendContactToUser($_SESSION['contact']);

        if ($sendAdmin && $sendUser) {
            unset($_SESSION['contact']);
            header('Location: complete.php');
            exit();
        }
    }
    $_SESSION['contact'] = $_POST;
    unset($_POST);
}
?>
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
				<form action="" id="send_contact" method="post">
					<input type="hidden" name="send" value="1">
					<div class="p-form__input">
						<p class="p-form__title">お名前<span class="u-caution">※</span></p>
						<div class="p-form__name name">
							<?= isset($_SESSION['contact']['お名前']) ? $_SESSION['contact']['お名前'] :'' ?>
						</div>
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<p class="p-form__title">電話番号</p>
						<div class="p-form__name name">
							<?= isset($_SESSION['contact']['電話番号']) ? $_SESSION['contact']['電話番号'] :'' ?>
						</div>
						<p class="p-form__title">メールアドレス<span class="u-caution">※</span></p>
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<div class="p-form__name mail">
							<?= isset($_SESSION['contact']['メールアドレス']) ? $_SESSION['contact']['メールアドレス'] :'' ?>
						</div>
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<p class="p-form__title">お問い合わせ内容<span class="u-caution">※</span></p>
						<div class="p-form__name">
							<?= isset($_SESSION['contact']['お問い合わせ内容']) ? $_SESSION['contact']['お問い合わせ内容'] :'' ?>
						</div>
						<div class="p-form__caution">※この項目は必須事項です。</div>
					</div>
					<div class="p-form__submission c-button__short"><input type="submit" value="send" ></div>
				</form>
			</section>
		</div>
	</main>
</div>
<?php include_once('../footer.php'); ?>