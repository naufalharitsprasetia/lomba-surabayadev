<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@merahputih.com',
            'password'=> bcrypt('admin123'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@gmail.com',
            'password'=> bcrypt('budi123'),
        ]); 
        User::create([
            'name' => 'Andi Firjatullah',
            'email' => 'andi@gmail.com',
            'password'=> bcrypt('andi123'),
        ]);
        // Category
        //1
        Category::create([
            'category_name' => 'Accessoris',
            'category_icon' => 'accessoris.png',
        ]);
        //2
        Category::create([
            'category_name' => 'Laptop',
            'category_icon' => 'laptop.png',
        ]);
        //3
        Category::create([
            'category_name' => 'Camera',
            'category_icon' => 'camera.png',
        ]);
        //4
        Category::create([
            'category_name' => 'Gaming',
            'category_icon' => 'gaming.png',
        ]);
        //5
        Category::create([
            'category_name' => 'Handphone',
            'category_icon' => 'hp.png',
        ]);
        //6
        Category::create([
            'category_name' => 'SmartWatch',
            'category_icon' => 'smartwatch.png',
        ]);
        
        // Product
        Product::create([
            'product_name' => 'Iphone 15 Pro Max Ultra 2GB',
            'product_category_id' => 1, // foreign
            'product_slug' => 'handphone berkualitas',
            'product_desc' => '',
            'product_price' => '17000000',
            'product_stock' => '12',
            'product_brand' => 'APPLE',
        ]);
        Product::create([
            'product_name' => 'Mouse Rexus White RGB Wireless',
            'product_category_id' => 1, // foreign
            'product_slug' => 'Buatlah hidup anda menjadi bahagia',
            'product_desc' => '',
            'product_price' => '100000',
            'product_stock' => '98',
            'product_brand' => 'REXUS',
        ]);
        Product::create([
            'product_name' => 'laptop asus vivobook v415_A152',
            'product_category_id' => 2, // foreign
            'product_slug' => 'laptop murah dengan spek terjangkau',
            'product_desc' => 'Laptop Terbagus',
            'product_price' => '7000000',
            'product_stock' => '66',
            'product_brand' => 'ASUS',
        ]);
    }
}
