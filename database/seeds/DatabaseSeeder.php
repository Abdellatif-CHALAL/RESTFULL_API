<?php

use App\Category;
use App\Expos;
use App\Product;
use App\Transaction;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        User::truncate();
        Category::truncate();
        Transaction::truncate();
        Product::truncate();
        // Expos::truncate();
        DB::table('civicrm_getexpos')->truncate();
        DB::table('category_product')->truncate();

        User::flushEventListeners();
        Category::flushEventListeners();
        Product::flushEventListeners();
        Transaction::flushEventListeners();
        Expos::flushEventListeners();

        $usersQuantity = 1000;
        $CategoriesQuantity = 30;
        $productsQuantity = 1000;
        $transactionsQuantity = 1000;
        $exposQuantity = 30;
        
        // factory(Expos::class,$exposQuantity)->create();
        factory(User::class,$usersQuantity)->create();
        factory(Category::class,$CategoriesQuantity)->create();
        factory(Product::class,$productsQuantity)->create()->each(
            function($product){
                $categories = Category::all()->random(mt_rand(1,5))->pluck('id');
                $product->categories()->attach($categories);
            });
        
        factory(Transaction::class,$transactionsQuantity)->create();
       
    }
}
