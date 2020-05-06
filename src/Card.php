<?php

namespace Cardmonitor\Skryfall;

use Cardmonitor\Skryfall\AbstractApi;

class Card extends AbstractApi
{

    public function findByCodeAndNumber(string $code, int $number, string $language = 'en')
    {
        return $this->_get('cards/' . $code . '/' . $number .'/' . $language);
    }

    public function search(array $parameters)
    {
        return $this->_get('cards/search', $parameters);
    }

}

?>