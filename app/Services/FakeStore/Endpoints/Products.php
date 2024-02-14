<?php

namespace App\Services\FakeStore\Endpoints;

use App\Services\FakeStore\Entitys\Product;
use App\Services\FakeStore\FakeStoreService;
use Illuminate\Support\Collection;

class Products
{
    public FakeStoreService $service;
    public function __construct()
    {
        $this->service = new FakeStoreService();
    }

    /**
     * Get All Products in API Fake Store.
     *
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->transform($this->service
            ->api
            ->get('products')
            ->json());
    }

    /**
     * Transform Products in collection.
     *
     * @param mixed $json
     * @return Collection
     */
    public function transform(mixed $json): Collection
    {
        return collect($json)->map(fn ($product) => new Product($product));
    }
}
