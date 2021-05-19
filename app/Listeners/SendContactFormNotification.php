<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitted;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendContactFormNotification
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
     * @param  ContactFormSubmitted  $event
     * @return void
     */
    public function handle(ContactFormSubmitted $event)
    {
        //
//        ddd($event->contactform);
        $admin = User::first();
        $admin->notify(new \App\Notifications\ContactFormSubmitted($event->contactform));
    }
}
