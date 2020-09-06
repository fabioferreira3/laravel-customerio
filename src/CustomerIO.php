<?php

namespace FabioFerreira\CustomerIO;

use FabioFerreira\CustomerIO\Services\CustomerIOAPI;

class CustomerIO
{
    protected CustomerIOAPI $api;

    public function __construct()
    {
        $this->api = new CustomerIOAPI();
    }

    private function createOrUpdateCustomer($customerId, $customerAttributes)
    {
        return $this->api->createOrUpdateCustomer($customerId, $customerAttributes);
    }

    public function createCustomer($customerId, $customerAttributes)
    {
        return $this->createOrUpdateCustomer($customerId, $customerAttributes);
    }

    public function updateCustomer($customerId, $customerAttributes)
    {
        return $this->createOrUpdateCustomer($customerId, $customerAttributes);
    }

    public function deleteCustomer($customerId)
    {
        return $this->api->deleteCustomer($customerId);
    }

    public function triggerEventOnCustomer($customerId, $eventName, $eventAttributes = [])
    {
        return $this->api->postEvent($customerId, $eventName, $eventAttributes);
    }
}
