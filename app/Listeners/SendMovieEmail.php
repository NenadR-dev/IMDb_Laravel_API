<?php

namespace App\Listeners;

use App\Events\MovieProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Services\EmailService;

class SendMovieEmail implements ShouldQueue
{
    private $emailService;
    public $connection = 'beanstalkd';
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(EmailService $emailService)
    {
        $this->emailService =$emailService;
    }

    /**
     * Handle the event.
     *
     * @param  MovieProcessed  $event
     * @return void
     */
    public function handle(MovieProcessed $event)
    {
        $this->emailService->sendMail($event->movie);
    }

    public function failed(MovieProcessed $event, $exception)
    {
        return "JOB FAILED";
    }
}
