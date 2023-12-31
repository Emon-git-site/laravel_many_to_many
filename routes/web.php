<?php

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

// $categories = ['Office Chairs', 'Modern Chairs', 'Home Chairs'];
// $descriptions = ['cat des office', 'cat des moder', 'cat des home'];

// foreach($categories as $category)
// {
//     Category::create([
//         'name'  =>  $category,
//     ]);
// }
// foreach($descriptions as $description)
// {
//     Category::create([
//         'description'  =>  $description,
//     ]);
// }

// $product = Product::create([
//     'name'  =>  'Home Brixton Faux Leather Armchair',
//     'price' =>  199.99,
// ]);

// $categories = Category::find([13,15]); // Modren Chairs, Home Chairs
// $product->categories()->attach($categories);

//    return "category Insexxrt done";

    $category = Category::find(13);
    $product = Product::find(4);

    return $product->categories;


    // return view('welcome');
});
