<?php

namespace App\Services\FakeStore\Endpoints;

trait HasProducts
{
    public function product(): Products
    {
        return new Products();
    }
}
