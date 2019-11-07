<?php

namespace App\Listeners;

use App\Events\UserRegisterationEvent;


use App\User;
use Illuminate\Support\Facades\Mail ;
use App\Mail\NewUserWelcomeEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


class SendEmailNewUserRegisteration
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $user;
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
        Mail::to($user->email)->send(new NewUserWelcomeEmail($user));





    }
}
