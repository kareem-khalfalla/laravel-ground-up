<?php

namespace App;

use Illuminate\Support\Facades\Mail;

class PostcardSendingService
{
    private string $country;
    private int $width;
    private int $height;

    /**
     * __construct
     *
     * @param  string $country
     * @param  int $width
     * @param  int $height
     * @return void
     */
    public function __construct(string $country, int $width, int $height)
    {
        $this->country  = $country;
        $this->width    = $width;
        $this->height   = $height;
    }

    /**
     * hello
     *
     * @param  string $message
     * @param  string $email
     * @return void
     */
    public function hello(string $message, string $email): void
    {
        Mail::raw($message, function ($message) use ($email) {
            // $message->from('john@johndoe.com', 'John Doe');
            // $message->sender('john@johndoe.com', 'John Doe');
            $message->to($email);
            // $message->cc('john@johndoe.com', 'John Doe');
            // $message->bcc('john@johndoe.com', 'John Doe');
            // $message->replyTo('john@johndoe.com', 'John Doe');
            // $message->subject('Subject');
            // $message->priority(3);
            // $message->attach('pathToFile');
        });
        dump("Postcard was sent with the message: $message");
    }
}
