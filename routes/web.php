<?php

use App\Http\Controllers\ControllersModels\CategoriesController;
use App\Http\Controllers\ControllersModels\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.index');
    //Route::get('/create', [CategoriesController::class, 'create'])->name('categories.create');
    Route::post('/store', [CategoriesController::class, 'store'])->name('categories.store');
    Route::get('/edit/{category}', [CategoriesController::class, 'edit'])->name('categories.edit');
    Route::put('/update/{category}', [CategoriesController::class, 'update'])->name('categories.update');
    Route::delete('/destroy/{category}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

});
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products.index');
    // يمكنك أيضاً إضافة مسارات أخرى كـ show و create و edit و destroy حسب الحاجة
});
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
});
Route::middleware(['role:admin'])->group(function () {
    Route::get('/assign-roles', [RoleController::class, 'showAssignRolesForm'])->name('assign-roles.show');
    Route::post('/assign-roles', [RoleController::class, 'assignRoles'])->name('assign-roles.assign');
});

require __DIR__.'/auth.php';
