<?php

namespace Tests\Feature\Api;

use Tests\TestCase;

class FakeStoreApiTest extends TestCase
{

    private string $name;
    /**
     * Test Service Architecture API of the fake store.
     *
     * @return void
     */
    public function test_whether_the_architecture_of_the_fake_store_api_is_correct(): void
    {
        $this->name = 'FakeStore';
        $this->assertDirectoryExists("app/Services/$this->name");
        $this->assertFileExists("app/Services/$this->name/$this->name"."Service.php");
        $this->assertDirectoryExists("app/Services/$this->name/Endpoints");
        $this->assertFileExists("app/Services/$this->name/Endpoints/HasProducts.php");
        $this->assertFileExists("app/Services/$this->name/Endpoints/Products.php");
        $this->assertDirectoryExists("app/Services/$this->name/Entitys");
        $this->assertFileExists("app/Services/$this->name/Entitys/Product.php");
    }

    public function test_can_fake_store_service(): void
    {
        //
    }
}
