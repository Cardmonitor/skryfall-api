<?php

namespace Cardmonitor\Skryfall\Tests\Api;

class CardTest extends \Cardmonitor\Skryfall\Tests\TestCase
{
    /**
     * @test
     */
    public function it_finds_a_card_by_cardmarket_id()
    {
        $data = $this->api->card->findByCardmarketId(self::CARD_CARDMARKET_PRODUCT_ID_COSTLY_PLUNDER);
        // var_dump($data);
        $this->assertEquals('card', $data['object']);
        $this->assertEquals(self::CARD_ID_COSTLY_PLUNDER, $data['id']);
        $this->assertEquals(self::CARD_CARDMARKET_PRODUCT_ID_COSTLY_PLUNDER, $data['cardmarket_id']);
        $this->assertEquals(self::CARD_NAME_COSTLY_PLUNDER, $data['name']);
    }

    /**
     * @test
     */
    public function it_gets_a_set_by_code()
    {
        $data = $this->api->card->findByCodeAndNumber(self::SET_CODE_IXALAN, self::CARD_NUMBER_COSTLY_PLUNDER);
        // var_dump($data);
        $this->assertEquals('card', $data['object']);
        $this->assertEquals(self::CARD_NAME_COSTLY_PLUNDER, $data['name']);
    }

    /**
     * @test
     */
    public function it_gets_the_cards_for_a_set()
    {
        $data = $this->api->card->search([
            'order' => 'set',
            'q' => 'set:' . self::SET_CODE_IXALAN,
            'unique' => 'prints',
        ]);

        var_dump($data);
    }
}