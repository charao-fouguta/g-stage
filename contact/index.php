<?php include('../component/function_path.php'); ?>
<?php include_once('../header.php'); ?>
<?php include_once('../component/function_media.php'); ?>
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__nallow u-paddingSide18">
			<section class="l-section l-pageTop">
				<h1><span>Contact<span class="u-rubyBottom u-pagetop">お問い合わせ</span></span></h1>
				<div class="l-breadcrumb">
					<a href="<?php echo $root; ?>">Home</a>
					<div>Contact</div>
				</div>
				<div class="p-form__guide">
					<p>下記フォームに必要事項を入力のうえ、Confirmボタンをクリックし確認画面へお進みください。<br>送信されたお問い合わせ内容を確認後、後日担当者よりご連絡いたします。</p>
					<p><span class="u-colorRed">※</span>は必須入力項目です</p>
				</div>
				<form action="./confirm.php" method="post">
					<div class="p-form__input">
						<p class="p-form__title">お名前<span class="u-caution">※</span></p>
						<input type="text" name="name" placeholder="例) 木永　いずみ" class="p-form__name">
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<p class="p-form__title">電話番号</p>
						<input type="text" name="tel" placeholder="例) 06-6947-7055" class="p-form__tel">
						<p class="p-form__title">メールアドレス<span class="u-caution">※</span></p>
						<input type="text" name="mail" placeholder="例) info@g-stage1967.com" class="p-form__mail">
						<div class="p-form__caution is-alert">※この項目は必須事項です。</div>
						<p class="p-form__title">お問い合わせ内容<span class="u-caution">※</span></p>
						<textarea name="message" rows="10"></textarea>
						<div class="p-form__caution">※この項目は必須事項です。</div>
					</div>
					<div class="p-form__privacyPolicy">
						<p>個人情報の取り扱いについて<span class="u-caution">※</span></p>
						<div>
							<h2>個人情報の取り扱いについて</h2>
							<dl>
								<div>
									<dt>はじめに</dt>
									<dd>個人情報保護の重要性を認識し、適切に利用し、保護することが社会的責任であると考え、個人情報の保護に努めることをお約束いたします。</dd>
								</div>
								<div>
									<dt>個人情報の定義</dt>
									<dd>個人情報とは、個人に関する情報であり、氏名、生年月日、性別、電話番号、電子メールアドレス、職業、勤務先等、特定の個人を識別し得る情報をいいます。</dd>
								</div>
								<div>
									<dt>個人情報の収集・利用</dt>
									<dd>当社は、以下の目的のため、その範囲内においてのみ、個人情報を収集・利用いたします。</dd>
									<dd>当社による個人情報の収集・利用は、お客様の自発的な提供によるものであり、お客様が個人情報を提供された場合は、当社が本方針に則って個人情報を利用することをお客様が許諾したものとします。</dd>
									<dd>
										<ul>
											<li>ご注文された当社の商品をお届けするうえで必要な業務</li>
											<li>新商品の案内など、お客様に有益かつ必要と思われる情報の提供</li>
											<li>業務遂行上で必要となる当社からの問い合わせ、確認、およびサービス向上のための意見収集</li>
											<li>各種のお問い合わせ対応</li>
										</ul>
									</dd>
								</div>
								<div>
									<dt>個人情報の第三者提供</dt>
									<dd>当社は、法令に基づく場合等正当な理由によらない限り、事前に本人の同意を得ることなく、個人情報を第三者に開示・提供することはありません。</dd>
								</div>
								<div>
									<dt>委託先の監督</dt>
									<dd>当店は、お客様へ商品やサービスを提供する等の業務遂行上、個人情報の一部を外部の委託先へ提供する場合があります。その場合、業務委託先が適切に個人情報を取り扱うように管理いたします。</dd>
								</div>
								<div>
									<dt>個人情報の管理</dt>
									<dd>当社は、個人情報の漏洩、滅失、毀損等を防止するために、個人情報保護管理責任者を設置し、十分な安全保護に努め、また、個人情報を正確に、また最新なものに保つよう、お預かりした個人情報の適切な管理を行います。</dd>
								</div>
								<div>
									<dt>情報内容の照会、修正または削除</dt>
									<dd>当社は、お客様が当社にご提供いただいた個人情報の照会、修正または削除を希望される場合は、ご本人であることを確認させていただいたうえで、合理的な範囲ですみやかに対応させていただきます。</dd>
								</div>
								<div>
									<dt>セキュリティーについて</dt>
									<dd>当店のお買い物カゴは、ベリサイン社のデジタルIDにより証明されています。お買い物カゴでのデータ入力、送信は、SSL暗号通信により、お客様のウェブブラウザーとサーバ間の通信がすべて暗号化されるので、ご記入された内容は安全に送信されます。</dd>
								</div>
							</dl>
						</div>
					</div>
					<div class="p-form__admission">
						<input type="checkbox" name="" id="check"><label for="check">個人情報の取り扱いについてに同意する</label>
					</div>
					<div class="p-form__caution">※この項目は必須事項です。</div>
					<div class="p-form__submission c-button__short"><input type="submit" value="confirm" ></div>
				</form>
			</section>
		</div>
	</main>
</div>
<?php include_once('../footer.php'); ?>