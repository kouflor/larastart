<?php

namespace App\Listeners;

use App;
use App\Events\UserWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendConfirmationEmail
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
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        if(App::runningInConsole() OR config('larastart.confirm-email') === false)
        {
            return false;
        }

        $event->user->unVerifyEmail();
    }
}
