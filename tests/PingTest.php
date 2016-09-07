<?php

use Mirahost\NetworkTools\Ping;

class PingTest extends PHPUnit_Framework_TestCase {

    public function testPingSend()
    {
        $ping = new Ping;
        $this->assertContains('PING', $ping->sendPing('http://example.com'));
    }

}