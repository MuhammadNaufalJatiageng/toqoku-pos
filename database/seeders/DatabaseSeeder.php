<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => "Muhammad Naufal",
            'email' => 'mnja@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '08123456789',
            'address' => 'Perumahan Medang'
        ]);
        User::create([
            'name' => "Jatiageng",
            'email' => 'jati@gmail.com',
            'password' => bcrypt('password'),
            'phone_number' => '081284920064',
            'address' => 'Medang, Pagedangan'
        ]);




        Store::create([
            'store_name' => "Toko Anak Negeri",
            'address' => 'Tangerang',
            'user_id' => 1
        ]);
        Store::create([
            'store_name' => "Toko Anak Bangsa",
            'address' => 'Tangerang',
            'user_id' => 1
        ]);
        Store::create([
            'store_name' => "Warung Pak Udji",
            'address' => 'Banten',
            'user_id' => 2
        ]);



        Product::create([
            'product_name' => "Sampurna Mild 16",
            'stock' => 10,
            'price' => 32000,
            'purchasing_capital' => 30500,
            'profit' => 1500,
            'user_id' => 1
        ]);
        Product::create([
            'product_name' => "Dji Sam Soe 12",
            'stock' => 10,
            'price' => 20000,
            'purchasing_capital' => 18400,
            'profit' => 1600,
            'user_id' => 1
        ]);
        Product::create([
            'product_name' => "Gulaku 1kg",
            'stock' => 10,
            'price' => 18000,
            'purchasing_capital' => 16000,
            'profit' => 2000,
            'user_id' => 2
        ]);
        Product::create([
            'product_name' => "Segitiga Biru 1kg",
            'stock' => 10,
            'price' => 13000,
            'purchasing_capital' => 12000,
            'profit' => 1000,
            'user_id' => 2
        ]);
        Product::create([
            'product_name' => "Tolak Angin",
            'stock' => 10,
            'price' => 4000,
            'purchasing_capital' => 3200,
            'profit' => 800,
            'user_id' => 1
        ]);


    
        Customer::create([
            'name' => "Pak Udji",
            'address' => 'Banten',
            'phone_number' => '08123456789',
            'store_id' => 1
        ]);
        Customer::create([
            'name' => "Pak Sinaga",
            'address' => 'Medan',
            'phone_number' => '08123456789',
            'store_id' => 2
        ]);
        Customer::create([
            'name' => "Bondan",
            'address' => 'Padang',
            'phone_number' => '08123456789',
            'store_id' => 3
        ]);
    }
}
