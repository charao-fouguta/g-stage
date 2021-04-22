<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class AdminContactMail extends Mailable
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
        return $this
        ->from($this->data['email'], $this->data['name'])
        ->subject('【G-STAGE・JAPAN株式会社ブランドサイト新規お問い合わせ】')
        ->text('admin.mail.contact')
        ->with([
            'name' => $this->data['name'],
            'phone_number' => $this->data['phone_number'],
            'email' => $this->data['email'],
            'content' => $this->data['content'],
            'time_now' => Carbon::now()->format('Y年m月d日 H時i分'),
        ]);
    }
}
