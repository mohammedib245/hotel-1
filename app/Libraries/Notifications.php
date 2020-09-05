<?php
namespace App\Libraries;

use App\Libraries\NotificationsInterface;

class Notifications implements NotificationsInterface
{
    /**
     * Send notifications
     *
     * @return void
     */
    public function send()
    {
        var_dump('notify');
    }
}
