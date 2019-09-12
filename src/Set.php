<?php

namespace Cardmonitor\Skryfall;

use Cardmonitor\Skryfall\AbstractApi;

class Set extends AbstractApi
{

    public function findByCode(string $code)
    {
        return $this->_get('sets/' . $code);
    }

}

?>