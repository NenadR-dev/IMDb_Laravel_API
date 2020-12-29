<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Movie;
class MovieMail extends Mailable
{
    use Queueable, SerializesModels;

    public $movie;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Movie $movie)
    {
        $this->movie = $movie;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mail@example.com', "Mailtrap")
                    ->subject('Movie added confirmation.')
                    ->view('mails.movie_added');
    }
}
