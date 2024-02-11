<?php

namespace App\Services\FakeStore;

use App\Services\FakeStore\Endpoints\HasProducts;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class FakeStoreService
{
    use HasProducts;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::baseUrl('https://fakestoreapi.com/');
    }
}
