@section('title', 'G-stage｜G-STAGE JAPAN株式会社')
@include('layouts.header')
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__nallow u-paddingSide18">
			<section class="l-section l-pageTop">
				<h1><span>Contact<span class="u-rubyBottom u-pagetop">お問い合わせ_完了</span></span></h1>
				<div class="l-breadcrumb">
					<a href="{{ route('top') }}">Home</a>
					<div>Contact</div>
				</div>
				<div class="p-form__guide">
					<h2>お問い合わせいただき誠にありがとうございました。<br>お問い合わせ内容の送信が完了しました。</h2>
					<p>この度は、お問い合わせいただき誠にありがとうございました。<br>お送りいただきました内容を確認の上、折り返しご連絡させていただきます。</p>
					<p>なお、ご入力いただいたメールアドレス宛に確認メールを自動配信しております。<br>確認メールが届かない場合、ご入力いただいたメールアドレスに誤りがある、<br>もしくは受信側のフィルタ設定による可能性がございます。<br>お手数ですが、メールアドレスのご確認と、<br>受信許可リストに info@g-stage1967.com
を追加していただき、<br>もう一度フォームよりお問い合わせいただきますようお願い申し上げます。</p>
				</div>
					<a href="{{ route('top') }}" class="p-form__submission c-button__short"><span>Home</span></a>
			</section>
		</div>
	</main>
</div>
@include('layouts.footer')
