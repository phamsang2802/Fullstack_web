<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailBill extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $gioHang;

    public function __construct($data, $gioHang)
    {
        $this->data     = $data;
        $this->gioHang  = $gioHang;
    }

    public function build()
    {
        return $this->subject($this->data['tieu_de'])->view('mail.bill', [
            'data'      => $this->data,
            'gioHang'   => $this->gioHang,
        ]);
    }
}
