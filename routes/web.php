<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\Logincontroller;
use App\Http\Controllers\Logoutcontroller;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Dashboardcontroller;

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



//Indexcontroller

Route::get('/', [Indexcontroller::class, 'index'])->name('home');

Route::get('/products/{id}', [Indexcontroller::class, 'products'])->name('products');

Route::get('/product/{id}', [Indexcontroller::class, 'product'])->name('product');

//Dashboardcontroller



//Logincontroller
Route::get('/login', [Logincontroller::class, 'index'])->name('login');
Route::post('/login', [Logincontroller::class, 'login'])->name('login');


//Admincontroller
Route::get('/admin', [Admincontroller::class, 'index'])->name('admin');
Route::post('/admin', [Admincontroller::class, 'admin_login'])->name('admin');
Route::get('/admin/dashboard', [Admincontroller::class, 'dashboard'])->name('admin.dashboard');

//User
Route::get('/admin/users', [Admincontroller::class, 'users'])->name('admin.users');








//Order
Route::get('/admin/order', [Admincontroller::class, 'order'])->name('admin.order');

//Categorie
Route::get('/admin/category', [Admincontroller::class, 'category'])->name('admin.category');
Route::get('/admin/add_category', [Admincontroller::class, 'add_category'])->name('admin.add_category');
Route::post('/admin/add_category', [Admincontroller::class, 'category_add'])->name('admin.add_category');
Route::get('/admin/delete/{id}', [Admincontroller::class, 'delete'])->name('admin.delete_category');
Route::get('updateshow/{id}',[Admincontroller::class,'show'])->name('admin.update_pagecategory');
Route::post('update/{id}',[Admincontroller::class,'update'])->name('admin.update_category');


//Product
Route::get('/admin/product', [Admincontroller::class, 'product'])->name('admin.product');
Route::get('/admin/add_product', [Admincontroller::class, 'add_product'])->name('admin.add_product');
Route::post('/admin/add_product', [Admincontroller::class, 'addproduct'])->name('admin.add_product');
Route::get('/admin/destory/{id}', [Admincontroller::class, 'destroy'])->name('admin.destroy_product');
Route::get('editshow/{id}',[Admincontroller::class,'editshow'])->name('admin.edit_pageproduct');
Route::post('edit/{id}',[Admincontroller::class,'edit'])->name('admin.edit_product');


//Logoutcontroller
Route::get('/logout', [Logoutcontroller::class, 'index'])->name('logout');
//Routposte::('/logout',[Logoutcontroller::class,'logout'])->name('logout');

//Registercontroller
Route::get('/register', [Registercontroller::class, 'index'])->name('register');
Route::post('/register', [Registercontroller::class, 'registration'])->name('user_register');

//Aboutcontroller
Route::get('/about', [Aboutcontroller::class, 'index'])->name('about');


//Contactcontroller
Route::get('/contact', [Contactcontroller::class, 'index'])->name('contact');
