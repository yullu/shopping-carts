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
        //
        $products = [
            [
                'name'=>'Aple Mac Book Pro 16',
                'details'=>'Apple macbook Pro 16, 256 SSD, 16GB Ram',
                'description'=>'16-core Neural Engine 16-inch Liquid Retina XDR display Three Thunderbolt 4 ports, HDMI port, SDXC card slot, MagSafe 3 port Magic Keyboard with Touch ID Force Touch trackpad 140W USB-C Power Adapter',
                'brand'=>'Aple',
                'price'=>2449,
                'shipping_cost'=>25,
                'image_path'=>'storage/product.png'

            ],
            [
                'name'=>'Sumsung 12 Inch',
                'details'=>'Sumsung 12 Inch Tablet',
                'description'=>'Samsung Galaxy Tab A7 Lite tablet comes with a 8.70-inch touchscreen display with, 3GB of RAM and packs 32GB of inbuilt storage. Samsung Galaxy Tab A7 Lite is powered by a 1.8GHz octa-core processor, runs Android 11 and is powered by a 5100mAh battery. Order for this Samsung Galaxy Tab A7 Lite online from Jumia Kenya and have it delivered to your doorstep. A hand holding Galaxy Tab A7 Lite with a beach scene with the word Adventure onscreen.',
                'brand'=>'Sumsung',
                'price'=>2400,
                'shipping_cost'=>25,
                'image_path'=>'storage/product2.png'

            ],
        ];
        foreach ($products as $key=>$value){
            Product::create($value);
        }
    }
}
