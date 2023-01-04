<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject($this->data['tieu_de'])->view('mail.register', [
            'xxx'  => $this->data,
        ]);
    }

    // Nếu như ai gọi RegisterMail thì cần cấp 1 biến $x['tieu_de'], $x['full_name'], $x['link']
}
