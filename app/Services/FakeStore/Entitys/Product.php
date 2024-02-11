<?php

namespace App\Services\FakeStore\Entitys;

class Product
{
    public int $id;
    public string $title;
    public string $price;
    public string $description;
    public string $category;
    public string $image;
    public array $rating;
    public function __construct(array $data)
    {
        $this->id = data_get($data,'id');
        $this->title = data_get($data,'title');
        $this->price = data_get($data,'price');
        $this->description = data_get($data,'description');
        $this->category = data_get($data,'category');
        $this->image = data_get($data,'image');
        $this->rating = data_get($data,'rating');
    }
}
