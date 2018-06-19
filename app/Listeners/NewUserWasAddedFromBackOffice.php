<?php

namespace App\Listeners;

use App\Events\NewUserFromBackOffice;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class NewUserWasAddedFromBackOffice
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
     * @param  NewUserFromBackOffice  $event
     * @return void
     */
    public function handle(NewUserFromBackOffice $event)
    {
        $recipient = $event->getEmail();

        Mail::send(['html'=>'backoffice.mails.newuserfrombackoffice'],['email'=>$event->getEmail(),'password'=>$event->getPassword(),'activationKey'=>$event->getActivationKey(),'fullName'=>$event->getFullName(),], function ($message) use ($recipient,$event){
            $message->from(env('MAIL_USERNAME'),'Tripyuk');
            $message->to($recipient)->subject('Tripyuk New User '.$event->getRole().'| no-reply');
        });
    }
}
