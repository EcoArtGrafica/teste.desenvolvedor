<?php

namespace Tests\Routes;

use Tests\TestCase;
use Faker\Factory;

# php artisan test --filter=BrandTest
class BrandTest extends TestCase
{

    # php artisan test --filter=BrandTest::test_store
    public function test_store(): void
    {

        // $faker = Factory::create('pt_BR');

        $response = $this->post('/api/brands', [
            'name' => 'Teste'
        ]);

        $response->dump();

        $response->assertStatus(200);
    }
}
