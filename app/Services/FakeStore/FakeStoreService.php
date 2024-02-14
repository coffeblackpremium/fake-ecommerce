<?php

namespace App\Services\FakeStore;

use App\Services\FakeStore\Endpoints\HasProducts;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

/**
 * Fake Store API Service
 * @see https://fakestoreapi.com/docs
 */
class FakeStoreService
{
    use HasProducts;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::baseUrl('https://fakestoreapi.com/');
    }
}
