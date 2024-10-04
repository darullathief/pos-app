<?php

use App\Livewire\Order;
use App\Livewire\Products;
use App\Livewire\Customers;
use App\Livewire\Transaction;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {   
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/order', Order::class );
Route::get('/transaction', Transaction::class);
Route::get('/products', Products::class);
Route::get('/customers', Customers::class);
