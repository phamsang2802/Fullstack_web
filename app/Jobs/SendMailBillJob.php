<?php

namespace App\Jobs;

use App\Mail\MailBill;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendMailBillJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $data;
    public $gioHang;

    public function __construct($data, $gioHang)
    {
        $this->data     = $data;
        $this->gioHang  = $gioHang;
    }

    public function handle()
    {
        Mail::to($this->data['email'])->send(new MailBill($this->data, $this->gioHang));
    }
}
