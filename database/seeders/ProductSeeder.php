<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        DB::table('products')->insert([
            'name' => 'TV Samsung',
            'description' => '52 Inch',
            'price' => 20000,
            'image_url' => 'https://images.samsung.com/is/image/samsung/p6pim/id/ua55au7000kxxd/gallery/id-uhd-au7000-ua55au7000kxxd-422905409?$720_576_PNG$',
        ]);
    }
}
