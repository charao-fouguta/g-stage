@section('title', 'G-stage｜G-STAGE JAPAN株式会社')
@include('layouts.header')
<div class="l-main u-paddingSideTB50">
	<main>
		<div class="l-column__nallow u-paddingSide18">
			<section class="l-section l-pageTop">
				<h1><span>Contact<span class="u-rubyBottom u-pagetop">お問い合わせ_確認</span></span></h1>
				<div class="l-breadcrumb">
					<a href="{{ route('top') }}">Home</a>
					<div>Contact</div>
				</div>
				<div class="p-form__guide">
					<p>入力内容をご確認の上、送信してください。</p>
				</div>
				<form action="{{ route('contact.complete') }}" id="send_contact" method="post">
					@csrf
					<div class="p-form__input">
						<p class="p-form__title">お名前<span class="u-caution">※</span></p>
						<div class="p-form__name name">
							{{ $data['name'] }}
						</div>
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<p class="p-form__title">電話番号</p>
						<div class="p-form__name name">
							{{ $data['phone_number'] }}
						</div>
						<p class="p-form__title">メールアドレス<span class="u-caution">※</span></p>
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<div class="p-form__name mail">
							{{ $data['email'] }}
						</div>
						<div class="p-form__caution">※この項目は必須事項です。</div>
						<p class="p-form__title">お問い合わせ内容<span class="u-caution">※</span></p>
						<div class="p-form__name">
							{!! nl2br(e($data['content'])) !!}
						</div>
						<div class="p-form__caution">※この項目は必須事項です。</div>
					</div>
					<div class="p-form__submission c-button__short"><input type="submit" value="send" ></div>
				</form>
			</section>
		</div>
	</main>
</div>
@include('layouts.footer')
