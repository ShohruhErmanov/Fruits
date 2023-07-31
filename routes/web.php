<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\TestimonsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\LogoController;
use App\Http\Controllers\Admin\NetworkController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\FilterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Contact2Controller;

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


Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/news', [MainController::class, 'new'])->name('new');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/shop', [MainController::class, 'shop'])->name('shop');
Route::get('/cart', [MainController::class, 'cart'])->name('cart');
Route::get('/single-product/{slug}', [MainController::class, 'product'])->name('product');
Route::get('/single-news/{slug}', [MainController::class, 'news'])->name('news');
Route::get('/search', [MainController::class, 'search'])->name('search');

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){

    Route::resource('features', FeatureController::class);
    Route::resource('product', ProductController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('testimons', TestimonsController::class);
    Route::resource('news', NewsController::class);
    Route::resource('logo', LogoController::class);
    Route::resource('network', NetworkController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('filter', FilterController::class);
    Route::resource('comment', CommentController::class);
    Route::resource('contact2', Contact2Controller::class);


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
