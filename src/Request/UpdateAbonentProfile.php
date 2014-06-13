<?php

namespace GoWeb\MiddlewareAPI\Request;

class UpdateAbonentProfile extends \Sokil\Rest\Client\Request\UpdateRequest
{
    public function setClientProfile(\GoWeb\Api\Model\Client $client)
    {
        $this->setBody($client->toJson(), 'application/json');
        return $this;
    }
}