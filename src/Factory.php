<?php

namespace GoWeb\MiddlewareAPI;

class Factory extends \Sokil\Rest\Client\Factory
{
    public function updateAbonentProfile(\GoWeb\Api\Model\Client $client)
    {
        try {
            $response = $this
                ->createRequest('UpdateAbonentProfile')
                ->setClientProfile($client)
                ->send();
        } catch (\Exception $e) {

        }
        
    }
}