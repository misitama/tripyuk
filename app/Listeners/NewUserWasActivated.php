<?php

namespace App\Listeners;

use App\Events\NewUserActivation;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUserWasActivated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewUserActivation  $event
     * @return void
     */
    public function handle(NewUserActivation $event)
    {
        //
    }
}
