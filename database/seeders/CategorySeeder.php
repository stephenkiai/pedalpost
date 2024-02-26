<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category_name' => 'Gear and Equipment',
                'slug' => 'gear and equipment'
            ],
            [
                'category_name' => 'Training and Fitness1',
                'slug' => 'training and fitness1'
            ],
            [
                'category_name' => 'Routes and Destinations',
                'slug' => 'routes and destinations'
            ],
            [
                'category_name' => 'Lifestyle and Culture',
                'slug' => 'lifestyle and culture'
            ],
            [
                'category_name' => 'Safety and Advocacy',
                'slug' => 'safety and advocacy'
            ],
            [
                'category_name' => 'Technology and Innovation',
                'slug' => 'technology and innovation'
            ],
            [
                'category_name' => 'Travel and Adventure',
                'slug' => 'travel and adventure'
            ],
            [
                'category_name' => 'Community Events and Initiatives',
                'slug' => 'community events and initiatives'
            ],

        ]);
    }
}
