<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\MailRecieve;
use Carbon\Carbon;

class UserContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = MailRecieve::onlyNotifiable()->get();
        return $this
            ->from($email, 'G-STAGE・JAPAN株式会社')
            ->subject('【G-STAGE・JAPAN株式会社】お問い合わせありがとうございます')
            ->text('mail.contact')
            ->with([
                'name' => $this->data['name'],
                'phone_number' => $this->data['phone_number'],
                'email' => $this->data['email'],
                'content' => $this->data['content'],
                'time_now' => Carbon::now()->format('Y年m月d日 H時i分'),
            ]);
    }
}
