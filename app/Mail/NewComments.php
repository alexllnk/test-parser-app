<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewComments extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var array
     */
    public $comments;

    /**
     * Create a new message instance.
     *
     * @param array $comments
     */
    public function __construct(array $comments)
    {

        $this->comments = $comments;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new-comments');
    }
}
