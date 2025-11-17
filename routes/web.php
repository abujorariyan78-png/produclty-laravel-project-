<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\MarketingPageController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\SuperPowerPageController;
use App\Http\Controllers\ValidationPageController;
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

 
Route::get('index/page',[PagesController::class,'index'])->name('index.page');
Route::get('dashboard/page',[PagesController::class,'dashboard'])->name('dashboard.page');
Route::get('layout/page',[PagesController::class, 'layout'])->name('layout.page');

// main pages start
Route::get('create/page',[MainPageController::class,'create'])->name('create.page');

Route::put('store/create',[MainPageController::class, 'store'])->name('store.create');

Route::get('list/page',[MainPageController::class, 'list'])->name('list.page');

Route::get('list/edit/{id}',[MainPageController::class, 'edit'])->name('list.edit');

Route::put('list/update/{id}',[MainPageController::class, 'update'])->name('list.update');

Route::delete('list/delete/{id}',[MainPageController::class, 'delete'])->name('list.delete');

// main page end

// superpower start

Route::get('create/page/power',[SuperPowerPageController::class,'create'])->name('create.page.power');

Route::put('upload/page/power',[SuperPowerPageController::class, 'upload'])->name('upload.page.power');

Route::get('power/page/list',[SuperPowerPageController::class, 'list'])->name('power.page.list');

Route::get('power/page/list/edit/{id}',[SuperPowerPageController::class, 'edit'])->name('power.page.list.edit');

// superpower end


// validation start
Route::get('creage/page/validation',[ValidationPageController::class,'create'])->name('create.validation');
Route::put('store/validation/page',[ValidationPageController::class, 'store'])->name('store.validation.page');
Route::get('validation/list/page',[ValidationPageController::class, 'list'])->name('validation.list.page');
Route::get('validation/edit/{id}',[ValidationPageController::class, 'edit'])->name('validation.edit');
Route::put('update/list/page/{id}',[ValidationPageController::class, 'update'])->name('update.list.page');
Route::delete('delete/list/{id}',[ValidationPageController::class, 'delete'])->name('delete.list');
// validation end

// products magener start
Route::get('create/page/product',[ProductPageController::class,'create'])->name('create.page.products');
Route::put('products/page/store',[ProductPageController::class, 'store'])->name('products.page.store');
Route::get('list/page/products',[ProductPageController::class, 'list'])->name('list.page.products');
Route::get('edit/page/products/{id}',[ProductPageController::class, 'edit'])->name('edit.page.products');
Route::put('edit/page/products/update/{id}',[ProductPageController::class, 'update'])->name('edit.page.products.update.edit');
Route::delete('list/page/item/delete/{id}',[ProductPageController::class, 'delete'])->name('list.page.item.delete');
// products maneger end

// Marketing strategis start

Route::get('create/page/marketing',[MarketingPageController::class,'create'])->name('create.page.marketing');
Route::put('store/page/marketing',[MarketingPageController::class, 'store'])->name('store.page.marketing');
Route::get('list/page/marketing',[MarketingPageController::class, 'list'])->name('list.page.marketing');
Route::get('edit/page/marketing/{id}',[MarketingPageController::class, 'edit'])->name('edit.marketing');
Route::put('update/marketing/page/{id}',[MarketingPageController::class, 'update'])->name('update.marketing.page');
Route::delete('delete/marketing/{id}',[MarketingPageController::class, 'delete'])->name('delete.marketing');
