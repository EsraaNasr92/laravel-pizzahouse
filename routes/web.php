<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {
  $pizza = [
    ['type' => 'hawaiian',  'base' => 'Cheesy Crust', 'price' => 10],
    ['type' => 'volcano',  'base' => 'garlic Crust', 'price' => 10],
    ['type' => 'veg supreme',  'base' => 'Thin & crispy', 'price' => 10]
  ];

  $name = request('name');

    return view('pizza', [
      'pizza' => $pizza,
      'name' => $name
      ]);
});
