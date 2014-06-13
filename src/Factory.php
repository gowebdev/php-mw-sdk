<?php

namespace GoWeb\MiddlewareAPI;

class Factory extends \Sokil\Rest\Client\Factory
{
    public function updateAbonentProfile(\GoWeb\Api\Model\Client $client)
    {
        return $this
            ->createRequest('UpdateAbonentProfile')
            ->setClientProfile($client)
            ->send();       
    }
}