<?php

namespace GoWeb\MiddlewareAPI;

class Factory extends \Sokil\Rest\Client\Factory
{
    protected $_requestClassNamespace = '\GoWeb\MiddlewareAPI\Request';
    
    public function updateAbonentProfile(\GoWeb\Api\Model\Client $client)
    {
        return $this
            ->createRequest('UpdateAbonentProfile')
            ->setClientProfile($client)
            ->send();       
    }
}