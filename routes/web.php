<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Admin\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


Route::get => To recover
Route::post => creation
Route::put => update
Route::patch => update
Route::delete => delete
Route::options => Returns which headers that specific route responds to.


|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/model', function () {

    $user = User::find(4);

    $store=$user->store()->create([
        'name'=>'Loja Teste',
        'description'=>'Loja Teste',
        'mobile_phone'=>'Loja Teste',
        'phone'=>'Loja Teste',
        'slug'=>'Loja Teste'
    ]);

    dd($store);

});

Route::get('/admin/stores', [StoreController::class, 'index'])->name('admin.stores');
Route::get('/admin/stores/create', [StoreController::class, 'create'])->name('admin.stores.create');