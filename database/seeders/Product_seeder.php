<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
     {
        //
        DB::table('_product')->insert([
           ['name'=>'Huawei P30 pro',
            'price'=>'80000',
            'gallary'=>'images\huawei-p30-pro.jpg',
            'category'=>'mobile phones',
            'description'=>'Huawei P30 pro with 8 GB Ram and 128 GB of internal storage.'],
            ['name'=>'L.G O led TV',
            'price'=>'80000',
            'gallary'=>'images\L.G tv.jpg',
            'category'=>'TV',
            'description'=>'L.G 50 inches O led 8K TV. '],            
            
        ]);
    
    }
}
