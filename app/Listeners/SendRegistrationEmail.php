<?php

namespace App\Listeners;

use App\Jobs\UserProcessed;
use App\Models\User;

class SendRegistrationEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle($event): void
    {
        UserProcessed::dispatch($event->user);
    }
}
