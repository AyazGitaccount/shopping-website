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
            'gallary'=>'https://fdn2.gsmarena.com/vv/pics/huawei/huawei-p30-pro-1.jpg',
            'category'=>'mobile phones',
            'description'=>'Huawei P30 pro with 8 GB Ram and 128 GB of internal storage.'],
            ['name'=>'L.G O led TV',
            'price'=>'80000',
            'gallary'=>'https://www.lg.com/us/images/tvs/md07521477/gallery/Desktop-06.jpg',
            'category'=>'TV',
            'description'=>'L.G 50 inches O led 8K TV. '],  
            ['name'=>'Samsung galaxy s10',
            'price'=>'80000',
            'gallary'=>'https://static01.nyt.com/images/2019/02/21/business/21samsunggalaxy-silo/fileupload-1550674718792-articleLarge.jpg?quality=75&auto=webp&disable=upscale',
            'category'=>'mobile phones',
            'description'=>'Samsung galaxy s10 with 8 GB Ram and 128 GB of internal storage.']          
            
        ]);
    
    }
}
