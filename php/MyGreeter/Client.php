<?php
namespace MyGreeter;
class Client
{
    public function getGreeting()
    {
        date_default_timezone_set('Asia/Shanghai');

        $hour = date("G");

        if ($hour < 12 && $hour >= 0) {
            return 'Good morning';
        } else if ($hour < 18 && $hour >=12) {
            return 'Good afternoon';
        } else {
            return 'Good evening';
        }
    }
}
