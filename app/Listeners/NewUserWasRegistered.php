<?php

namespace App\Listeners;

use App\Events\NewUserRegister;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NewUserWasRegistered
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
     * @param  NewUserRegister  $event
     * @return void
     */
    public function handle(NewUserRegister $event)
    {
        $recipient = $event->getEmail();

        Mail::send(['html'=>'backoffice.mails.newuserregister'],['email'=>$event->getEmail(),'activationKey'=>$event->getActivationKey(),'password'=>$event->getPassword(),'level'=>$event->getUserLevel()], function ($message) use ($recipient){
            $message->from(env('MAIL_USERNAME'),'Tripyuk');
            $message->to($recipient)->subject('Tripyuk New User Activation Code | no-reply');
        });
    }
}
