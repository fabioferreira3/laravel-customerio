<?php

namespace FabioFerreira\CustomerIO\Services;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class CustomerIOAPI
{
    protected string $mainUrl;
    protected string $customerEndpoint;
    private PendingRequest $connect;

    public function __construct()
    {
        $this->mainUrl = "https://track.customer.io/api/v1";
        $this->customerEndpoint = "$this->mainUrl/customers";
        $this->connect = Http::withBasicAuth(config('customerio.site_id'), config('customerio.api_key'));
    }

    private function customerTrackerEndpoint(string $id)
    {
        return "$this->customerEndpoint/$id";
    }

    private function customerEventTrackerEndpoint(string $id)
    {
        return "$this->customerEndpoint/$id/events";
    }

    public function createOrUpdateCustomer($customerId, $customerAttributes)
    {
        return $this->connect->put(static::customerTrackerEndpoint($customerId), $customerAttributes);
    }

    public function deleteCustomer($customerId)
    {
        return $this->connect->delete(static::customerTrackerEndpoint($customerId));
    }

    public function postEvent($customerId, $eventName, $eventAttributes)
    {
        $eventPayload = ['name' => $eventName];
        if (count($eventAttributes)) {
            $eventPayload['data'] = $eventAttributes;
        }
        return $this->connect->post(static::customerEventTrackerEndpoint($customerId), $eventPayload);
    }
}
