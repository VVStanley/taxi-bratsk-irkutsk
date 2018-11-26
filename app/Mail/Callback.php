<?php

namespace App\Mail;

use App\Models\Option;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Callback extends Mailable
{
    use Queueable, SerializesModels;

    public $phone;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($phone = '')
    {
        $this->phone = $phone;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $option = Option::findOrFail(1);

        return $this->from($option->email)->view('mail.callback');
    }
}
