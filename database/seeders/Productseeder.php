<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Eucaliptus',
            'price'=>5,
            'description'=>'You can use it on pharmaceutical, antiseptic, repellent, flavouring, fragrance and industrial uses.',
            'qty'=>30,
            'category'=>'huiles essentielles',
            'gallery'=>'img/caliptus.jpg',
        ],
       
    
    );
    }
}
