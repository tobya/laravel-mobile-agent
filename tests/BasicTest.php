<?php

require __DIR__.'/../vendor/mobiledetect/mobiledetectlib/tests/BasicsTest.php';

use Bogddan\Agent\Agent;

class BasicTestExtended extends BasicTest
{
    /**
     * @var Agent
     */
    protected $detect;

    public function setUp()
    {
        $this->detect = new Agent();
    }
}
