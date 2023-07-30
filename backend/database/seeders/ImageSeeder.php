<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Imagens estão salva na pasta storage
        $images = [
            ['2af6eaf0a7be9dc316d18059957533ff.webp', 'a16f8f6f97336804fc6b69bf5c8f3795.webp'],
            ['D_NQ_NP_2X_914086-MLU70768956941_072023-F.webp', 'D_NQ_NP_2X_959456-MLU70768870019_072023-F.webp'],
            ['f67c18fd03e84e47a9570c78548edab0.webp', 'f67c18fd03e84e47a9570c78548edab0.webp'],
            ['ce6da0861e888b83286c200ad60db12c.webp', 'ced4949ce469b3faeb862a18f2ef6931.webp'],
            ['365a41a9802f76ee0978e25492c72a3a.webp', '29936d9830ad861b6d4342d5e596e82c.webp'],
            ['2663254749_1.webp', '2663254749_2.webp'],
            ['41+Hv0SPqLL._AC_SL1000_.jpg', '31xaK+B6R3S._AC_SL1000_.jpg'],
            ['8c51c01355640eeb59d7e8b639b90b78.webp', '64bf269da4c4e4cb883d75026a969128.webp'],
            ['b5604a0486939cde3a9dce07bda3e419.webp', 'b5604a0486939cde3a9dce07bda3e419.webp'],
            ['c00bd7bd9fd01c6bc4915a5508de8021.webp', 'c41a5037a59ecb1708ed1e5016430b46.webp'],
            ['f788d4d4878fc768c092b9a42dcb92dd.webp', 'c95f4d47fec6ae4e52a247d8612f9e5f.webp'],
            ['D_NQ_NP_2X_957820-MLA44029591036_112020-F.webp', 'D_NQ_NP_2X_709412-MLA44029424531_112020-F.webp'],
            ['61uhm9oeVGS._AC_SL1500_.jpg', '81vg0IemoyL._AC_SL1500_.jpg'],
            ['71jMtNo9U-L._AC_SL1500_.jpg', '71z8x+AjGsL._AC_SL1500_.jpg'],
            ['71APp0IvbLL._AC_SL1500_.jpg', '61WjyYLSzAL._AC_SL1000_.jpg'],
        ];

        foreach ($images as $key => $image) {
            $product = Product::find($key + 1);
            $product->main_image = $image[0];
            foreach ($image as $src) {
                $product->images()->create([
                    'src' => $src
                ]);
            }
            $product->save();
        }
    }
}
