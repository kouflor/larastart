<?php

namespace App\Listeners;

use App\Events\UserWasCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AssignUserRole
{
    /**
     * Defines public $user var.
     *
     * @var
     */
    public $user;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  UserWasCreated  $event
     * @return void
     */
    public function handle(UserWasCreated $event)
    {
        if($event->user->id === 1) {
            return $event->user->assignRole('webmaster');
        }

        return $event->user->assignRole('user');
    }
}