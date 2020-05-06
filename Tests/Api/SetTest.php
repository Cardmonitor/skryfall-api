<?php

namespace Cardmonitor\Skryfall\Tests\Api;

class SetTest extends \Cardmonitor\Skryfall\Tests\TestCase
{
    /**
     * @test
     */
    public function it_gets_a_set_by_code()
    {
        $data = $this->api->set->findByCode(self::SET_CODE_IXALAN);
        // var_dump($data);
        $this->assertEquals('set', $data['object']);
        $this->assertEquals('Ixalan', $data['name']);
        $this->assertArrayHasKey('icon_svg_uri', $data);
    }

    /**
     * @test
     */
    public function it_gets_an_empty_array_if_the_set_is_not_found()
    {
        $data = $this->api->set->findByCode(self::SET_CODE_INVALID);
        // var_dump($data);
        $this->assertEquals([], $data);
    }
}