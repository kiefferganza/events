<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;

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
    public function handle(object $event): void
    {
        Log::info('User has been processed. Sending registration email.');
    }
}
