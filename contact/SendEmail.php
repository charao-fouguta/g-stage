<?php

class SendEmail
{
	function __construct()
	{

	}

	public function sendContactToAdmin($data) {
		try {
			$from = 'oono@xend.co.jp';

			mb_language("JA");
			mb_internal_encoding("UTF-8");

			$header  = 'From:' . mb_encode_mimeheader("G-STAGE・JAPAN株式会社") . '<' . $from . '>' . "\n";
			$header  .= 'To:' . mb_encode_mimeheader("ユーザー名") . '<' . 'oono@xend.co.jp' . '>' . "\n";
			$subject = '【G-STAGE・JAPAN株式会社ブランドサイト新規お問い合わせ】';
			$body = $this->buildBodyContact('admin', $data);

			mb_send_mail('hashimoto@xend.co.jp', $subject, $body, $header); // mail test: hasimoto.test@gmail.com - pass: dongoctrac

		    return true;
		} catch (Exception $e) {
			$_SESSION['contact']['error'] = '電子メールが失敗しました。';
		}

		return false;
	}

	public function sendContactToUser($data) {
		try {
			$from = 'hashimoto@xend.co.jp'; // mail test: hasimoto.test@gmail.com - pass: dongoctrac

			mb_language("JA");
			mb_internal_encoding("UTF-8");
			$header  = 'From:' . mb_encode_mimeheader("G-STAGE・JAPAN株式会社") . '<' . $from . '>' . "\n";
			$header  .= 'To:' . mb_encode_mimeheader("ユーザー名") . '<' . 'oono@xend.co.jp' . '>' . "\n";

			$subject = '【G-STAGE・JAPAN株式会社】お問い合わせありがとうございます';
			$body = $this->buildBodyContact('user', $data);

			mb_send_mail($data['メールアドレス'], $subject, $body, $header);

		    return true;
		} catch (Exception $e) {
			$_SESSION['contact']['error'] = '電子メールが失敗しました。';
		}

		return false;
	}

	private function buildBodyContact($type, $data) {
		if ($type == 'admin') {
			$body = $this->load_body_contact_admin();
		} else {
			$body = $this->load_body_contact_user();
		}


		$body = str_replace('%お名前%', $data['お名前'], $body);
		$body = str_replace('%電話番号%', $data['電話番号'], $body);
		$body = str_replace('%メールアドレス%', $data['メールアドレス'], $body);
		$body = str_replace('%time%',date('Y') . '年 ' . date('m') . '月 ' . date('d') . '日'." ".date( "H"). '時' .date('i'). '分', $body);
		$body = str_replace('%お問い合わせ内容%', $data['お問い合わせ内容'], $body);

		return $body;
	}

	 /**
     *
     * @return string
     */
    private function load_body_contact_admin() {
        return
<<< EOM


G-STAGE・JAPAN株式会社のブランドサイトから
お問い合わせを受け付けました。
内容をご確認のうえ、ご返信をお願いします。

━━━━━━━━□■□　お問い合わせ内容　□■□━━━━━━━

お名前 : 	%お名前%
電話番号 : 	%電話番号%
メールアドレス : 	%メールアドレス%
お問い合せ日時：  %time%
お問い合わせ内容 : 	%お問い合わせ内容%

━━━━━━━━━━━━━━━━━━━━━━━━━━━━

EOM;
   }

   private function load_body_contact_user() {
        return
<<< EOM

※このメールはシステムからの自動返信です

%お名前%様

お世話になっております。
G-STAGE・JAPAN株式会社へのお問い合わせありがとうございました。

以下の内容でお問い合わせを受け付けいたしました。
担当者よりご連絡いたしますので
今しばらくお待ちくださいませ。


━━━━━━━━□■□　お問い合わせ内容　□■□━━━━━━━

お名前 : 	%お名前%
電話番号 : 	%電話番号%
メールアドレス : 	%メールアドレス%
お問い合せ日時：   %time%
お問い合わせ内容 : 	%お問い合わせ内容%

━━━━━━━━━━━━━━━━━━━━━━━━━━━━

【会社情報】
住所：〒150-0001　東京都渋谷区神宮前3-22-10 SAITOビル4F-A 
電話番号：03-6434-9580
FAX：03-6434-9581
営業時間：平日 10時～17時
メール：info@g-stage1967.com

━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
   }
}
