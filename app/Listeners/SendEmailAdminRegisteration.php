<?php

namespace App\Listeners;

use App\Events\UserRegisterationEvent;
use App\Mail\NewUserToAdmin ;

use App\User;
use Illuminate\Support\Facades\Mail ;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailAdminRegisteration
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(UserRegisterationEvent $event)
    {
        $user = $event->user;
        Mail::to('haderhasan904@gmail.com')->send(new NewUserToAdmin($user));



    }
}
