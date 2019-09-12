<?php

namespace Cardmonitor\Skryfall\Tests;

use Cardmonitor\Skryfall\Api;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    const SET_CODE_IXALAN = 'xln';
    const CARD_NUMBER_COSTLY_PLUNDER = 96;

    protected $api;

    protected function setUp() : void
    {
        $this->api = new Api();
    }
}