<?php

namespace Cardmonitor\Skryfall;

use Cardmonitor\Skryfall\AbstractApi;

class Set extends AbstractApi
{
    public function all()
    {
        return $this->_get('sets');
    }

    public function findByCode(string $code)
    {
        return $this->_get('sets/' . $code);
    }

}

?>