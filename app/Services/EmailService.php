<?php

namespace App\Services;
use App\Interfaces\EmailServiceInterface;
use Illuminate\Support\Facades\Mail;
use App\Mail\MovieMail;

class EmailService implements EmailServiceInterface
{
    public function sendMail($movie)
    {
        Mail::to(env('MAIL_TO'))->send(new MovieMail($movie));
    }
}
