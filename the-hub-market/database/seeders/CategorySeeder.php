<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Shoes',           'description' => 'Footwear for all occasions'],
            ['name' => 'Bags',            'description' => 'Handbags, backpacks and more'],
            ['name' => 'Clothing',        'description' => 'Men and women apparel'],
            ['name' => 'Toys',            'description' => 'Toys and games for children'],
            ['name' => 'Home Appliances', 'description' => 'Appliances for the home'],
            ['name' => 'Electronics',     'description' => 'Phones, tablets and accessories'],
            ['name' => 'Beauty',          'description' => 'Skincare, haircare and cosmetics'],
            ['name' => 'Sports',          'description' => 'Sportswear and equipment'],
        ];

        foreach ($categories as $cat) {
            DB::table('categories')->insertOrIgnore([
                'name'        => $cat['name'],
                'slug'        => Str::slug($cat['name']),
                'description' => $cat['description'],
                'created_at'  => now(),
                'updated_at'  => now(),
            ]);
        }
    }
}