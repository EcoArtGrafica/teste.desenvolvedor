<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $home_appliances = [
            [
                'name' => 'Geladeira French Door 514L',
                'description' => 'Uma geladeira espaçosa e moderna, com design French Door, prateleiras ajustáveis, sistema de refrigeração Twin Cooling Plus, dispenser de água e gelo na porta, e iluminação LED interna.',
                'voltage' => 'bivolt',
                'brand_id' => 1,
                'value' => 5000,
                'created_at' => now()
            ],
            [
                'name' => 'Máquina de Lavar Roupas Front Load 10kg',
                'description' => 'Lavadora de roupas de alta eficiência com sistema Front Load, diversas programações de lavagem e motor de baixo ruído.',
                'voltage' => '110V',
                'brand_id' => 1,
                'value' => 2500,
                'created_at' => now()
            ],
            [
                'name' => 'Micro-ondas 32L com Grill',
                'description' => 'Micro-ondas com 32 litros de capacidade, função grill para dourar alimentos e várias configurações de potência.',
                'voltage' => '220V',
                'brand_id' => 1,
                'value' => 900,
                'created_at' => now()
            ],
            [
                'name' => 'Smart TV LED 55" 4K',
                'description' => 'TV de alta definição com tela LED de 55 polegadas e resolução 4K, tecnologia Smart TV e acesso a aplicativos e serviços de streaming.',
                'voltage' => 'bivolt',
                'brand_id' => 2,
                'value' => 3500,
                'created_at' => now()
            ],
            [
                'name' => 'Ar Condicionado Split 12.000 BTUs',
                'description' => 'Sistema de ar condicionado eficiente e silencioso, com resfriamento rápido e controle remoto.',
                'voltage' => '220V',
                'brand_id' => 2,
                'value' => 1800,
                'created_at' => now()
            ],
            [
                'name' => 'Forno Elétrico 45L',
                'description' => 'Forno elétrico com capacidade de 45 litros, diversas funções e controle de temperatura.',
                'voltage' => 'bivolt',
                'brand_id' => 2,
                'value' => 600,
                'created_at' => now()
            ],
            [
                'name' => 'Aspirador de Pó Vertical 2 em 1',
                'description' => 'Aspirador versátil que pode ser usado como vertical ou portátil, com sistema de filtragem eficiente e bateria recarregável.',
                'voltage' => 'bivolt',
                'brand_id' => 3,
                'value' => 300,
                'created_at' => now()
            ],
            [
                'name' => 'Fogão a Gás 5 Bocas',
                'description' => 'Fogão a gás com 5 bocas, forno espaçoso e acendimento automático.',
                'voltage' => 'bivolt',
                'brand_id' => 3,
                'value' => 1200,
                'created_at' => now()
            ],
            [
                'name' => 'Purificador de Água com Refrigeração',
                'description' => 'Purificador de água com sistema de filtragem avançado, controle de temperatura e design compacto.',
                'voltage' => 'bivolt',
                'brand_id' => 3,
                'value' => 800,
                'created_at' => now()
            ],
            [
                'name' => 'Fogão de Embutir 4 Bocas',
                'description' => 'Fogão de embutir com 4 bocas e forno, ideal para cozinhas menores.',
                'voltage' => 'bivolt',
                'brand_id' => 4,
                'value' => 1600,
                'created_at' => now()
            ],
            [
                'name' => 'Refrigerador Inverse 443L',
                'description' => 'Refrigerador com design inverse, freezer na parte inferior, refrigerador na parte superior e compartimentos especiais.',
                'voltage' => 'bivolt',
                'brand_id' => 4,
                'value' => 4500,
                'created_at' => now()
            ],
            [
                'name' => 'Lava e Seca 11kg',
                'description' => 'Máquina de lavar e secar roupas com capacidade de 11kg e diversas programações de lavagem.',
                'voltage' => 'bivolt',
                'brand_id' => 4,
                'value' => 3000,
                'created_at' => now()
            ],
            [
                'name' => 'Liquidificador 800W (110V/220V)',
                'description' => 'Liquidificador potente com 800W, várias velocidades e função pulsar.',
                'voltage' => 'bivolt',
                'brand_id' => 5,
                'value' => 150,
                'created_at' => now()
            ],
            [
                'name' => 'Ferro de Passar a Vapor',
                'description' => 'Ferro a vapor com base antiaderente, sistema de vapor contínuo e função de spray.',
                'voltage' => 'bivolt',
                'brand_id' => 5,
                'value' => 80,
                'created_at' => now()
            ],
            [
                'name' => 'Cafeteira Expresso Automática',
                'description' => 'Cafeteira automática que prepara diversos tipos de café expresso com um toque, moedor de grãos integrado e bico de vapor.',
                'voltage' => 'bivolt',
                'brand_id' => 5,
                'value' => 900,
                'created_at' => now()
            ],
        ];

        Product::insert($home_appliances);
    }
}
