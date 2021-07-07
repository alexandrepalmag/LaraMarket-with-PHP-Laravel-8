<?php



use App\Http\Controllers\Admin\ProductController;
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

    $store = $user->store()->create([
        'name' => 'Loja Teste',
        'description' => 'Loja Teste',
        'mobile_phone' => 'Loja Teste',
        'phone' => 'Loja Teste',
        'slug' => 'Loja Teste'
    ]);

    dd($store);
});



Route::prefix('admin')->name('admin.')->group(function () {

   /*  Route::prefix('stores')->name('stores.')->group(function () {

        Route::get('/', [StoreController::class, 'index'])->name('index');
        Route::get('/create', [StoreController::class, 'create'])->name('create');
        Route::post('/store', [StoreController::class, 'store'])->name('store');
        Route::get('/{store}/edit', [StoreController::class, 'edit'])->name('edit');
        Route::post('/update/{store}', [StoreController::class, 'update'])->name('update');
        Route::get('/destroy/{store}', [StoreController::class, 'destroy'])->name('destroy');
    }); */

    Route::resource('stores', StoreController::class);
    Route::resource('products', ProductController::class);
});
