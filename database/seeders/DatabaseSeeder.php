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
            'product_name' => 'Apple iPhone 14 Pro max 5G 1TB 512G',
            'product_category_id' => 5, // foreign
            'product_img' => 'ip14.png',
            'product_slug' => '',
            'product_desc' => 'Apple iPhone 14 Pro Max menawarkan perpaduan dapur pacu dan layar terbaik. Prosesor Apple A16 Bionic dan iOS 16 disandingkan dengan layar Super Retina XDR OLED 6,7 inci yang gesit untuk multitasking. Untuk mendukung performa Apple menyematkan 6GB RAM serta ROM 128GB, 256GB, 512GB, dan 1TB. Semakin lengkap dengan quad kamera beresolusi 48 MP serta kamera selfie 12 MP dengan sensor biometrik.',
            'product_price' => '20500000',
            'product_stock' => '12',
            'product_brand' => 'APPLE',
        ]);
        Product::create([
            'product_name' => 'Mouse Rexus White RGB Wireless',
            'product_category_id' => 1, // foreign
            'product_img' => 'mouse.png',
            'product_slug' => '',
            'product_desc' => '',
            'product_price' => '100000',
            'product_stock' => '98',
            'product_brand' => 'REXUS',
        ]);
        Product::create([
            'product_name' => 'MacBook Pro M2 (2022)',
            'product_category_id' => 2, // foreign
            'product_img' => 'macbook.png',
            'product_slug' => '',
            'product_desc' => 'MacBook Pro 13 inci lebih andal dari sebelumnya. Bertenaga super berkat chip M2 generasi berikutnya, MacBook Pro ini merupakan laptop pro Apple yang paling portabel, dengan kekuatan baterai hingga 20 jam (2)',
            'product_price' => '17000000',
            'product_stock' => '66',
            'product_brand' => 'APPLE',
        ]);
        Product::create([
            'product_name' => 'Keyboard REXUS RGB Mechanical-Keyboard',
            'product_category_id' => 4, // foreign
            'product_img' => 'keyboard.png',
            'product_slug' => '',
            'product_desc' => 'MacBook Pro 13 inci lebih andal dari sebelumnya. Bertenaga super berkat chip M2 generasi berikutnya, MacBook Pro ini merupakan laptop pro Apple yang paling portabel, dengan kekuatan baterai hingga 20 jam (2)',
            'product_price' => '270000',
            'product_stock' => '16',
            'product_brand' => 'REXUS',
        ]);
        Product::create([
            'product_name' => 'MacBook Pro M2 (2022)',
            'product_category_id' => 2, // foreign
            'product_img' => 'macbook.png',
            'product_slug' => '',
            'product_desc' => 'MacBook Pro 13 inci lebih andal dari sebelumnya. Bertenaga super berkat chip M2 generasi berikutnya, MacBook Pro ini merupakan laptop pro Apple yang paling portabel, dengan kekuatan baterai hingga 20 jam (2)',
            'product_price' => '17000000',
            'product_stock' => '66',
            'product_brand' => 'APPLE',
        ]);
    }
}
