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
Route::get('/form', function () {
    return view('form');
});
Route::post('/form', function (\Illuminate\Http\Request $request) {
    $Discount_Amount = $request->List_Price * $request->Discount_Percent * 0.01;
    $Discount_Price = $request->List_Price - $Discount_Amount;
    $Product_Description = $request->Product_Description;
    $price = $request->List_price;
    $Discount_Percent = $request->Discount_Percent;
    return view('display-discount', compact(['Discount_Price', 'Discount_Amount', 'Product_Description', 'price', 'Discount_Percent']));

});
