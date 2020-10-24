<?php
namespace App\Libraries;

use App\Libraries\NotificationsInterface;
use App\Mail\Reservations;
use Illuminate\Support\Facades\Mail;

class Notifications implements NotificationsInterface
{
    /**
     * Send notifications
     *
     * @return void
     */
    public function send()
    {
        Mail::to('sample@tesst.com')->send(new Reservations('Adam Jackson'));
    }
}
