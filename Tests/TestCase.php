<?php

namespace Cardmonitor\Skryfall\Tests;

use Cardmonitor\Skryfall\Api;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    const SET_CODE_IXALAN = 'xln';
    const SET_CODE_INVALID = 'invalid';
    const CARD_ID_COSTLY_PLUNDER = 'c3f1f41e-98fc-4f6b-b287-c8899dff8ab0';
    const CARD_NUMBER_COSTLY_PLUNDER = 96;
    const CARD_NAME_COSTLY_PLUNDER = 'Costly Plunder';
    const CARD_CARDMARKET_PRODUCT_ID_COSTLY_PLUNDER = 301775;

    protected $api;

    protected function setUp() : void
    {
        $this->api = new Api();
    }
}