<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formularioProducto',[ProductController::class,'create']);
Route::post('/crearProducto',[ProductController::class,'store'])->name('product.store');

Route::get('/formularioCliente',[ClientController::class,'create']);
Route::post('/crearCliente',[ClientController::class,'store'])->name('client.store');

Route::get('/formularioVendedor',[SellerController::class,'create']);
Route::post('/crearVendedor',[SellerController::class,'store'])->name('seller.store');


