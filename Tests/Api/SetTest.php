<?php

namespace Cardmonitor\Skryfall\Tests\Api;

class SetTest extends \Cardmonitor\Skryfall\Tests\TestCase
{
    /**
     * @test
     */
    public function it_gets_all_sets()
    {
        $data = $this->api->set->all();
        $this->assertArrayHasKey('object', $data);
        $this->assertArrayHasKey('has_more', $data);
        $this->assertArrayHasKey('data', $data);
    }

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
    public function it_throws_an_exception_if_the_set_is_not_found()
    {
        $this->expectException(\GuzzleHttp\Exception\ClientException::class);
        $this->api->set->findByCode(self::SET_CODE_INVALID);
    }
}