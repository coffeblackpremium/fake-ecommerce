<?php

test('whether the architecture of the fake store api is correct', function () {
    $this->name = 'FakeStore';

    expect("app/Services/$this->name")->toBeDirectory()
        ->and("app/Services/$this->name/$this->name" . "Service.php")->toBeFile()
        ->and("app/Services/$this->name/Endpoints")->toBeDirectory()
        ->and("app/Services/$this->name/Endpoints/HasProducts.php")->toBeFile()
        ->and("app/Services/$this->name/Endpoints/Products.php")->toBeFile()
        ->and("app/Services/$this->name/Entitys")->toBeDirectory()
        ->and("app/Services/$this->name/Entitys/Product.php")->toBeFile();
});

test('can fake store service', function () {
    //
})->todo();
