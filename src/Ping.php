<?php

namespace Mirahost\NetworkTools;

class Ping
{

    public function sendPing($host)
    {
        $host = preg_replace("/[^A-Za-z0-9.]/", "", $host);

        $output =  shell_exec("ping -c 4 " . escapeshellarg($host));

        return $output;
    }
}