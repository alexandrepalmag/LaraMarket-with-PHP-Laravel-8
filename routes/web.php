<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

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
