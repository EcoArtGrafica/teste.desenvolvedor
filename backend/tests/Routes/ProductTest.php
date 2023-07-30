<?php

namespace Tests\Routes;

use Tests\TestCase;

# php artisan test --filter=ProductTest
class ProductTest extends TestCase
{

    # php artisan test --filter=ProductTest::test_store
    public function test_store(): void
    {
        $response = $this->post('/api/products', [
            'name' => 'Geladeira Frost Free',
            'description' => 'Este produto é totalmente versátil. Tudo para ser personalizado para comportar o que você preferir.)',
            'voltage' => '220v',
            'brand_id' => 1,
            'value' => 5500.00
        ]);

        // $response->dump();

        $response->assertStatus(200);
    }
}
