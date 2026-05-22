<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\StockLog;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $totalProducts = Product::where('user_id', Auth::id())
                            ->count();

    $lowStocks = Product::where('user_id', Auth::id())
                        ->where('quantity', '<', 5)
                        ->latest()
                        ->get();

    $recentActivities = StockLog::where('user_id', Auth::id())
                                ->latest()
                                ->take(5)
                                ->get();

    return view('dashboard', compact(

        'totalProducts',

        'lowStocks',

        'recentActivities'

    ));

})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('products', ProductController::class);

Route::post('/products/{product}/stock-in',
    [ProductController::class, 'stockIn'])
    ->name('products.stock.in');

Route::post('/products/{product}/stock-out',
    [ProductController::class, 'stockOut'])
    ->name('products.stock.out');

require __DIR__.'/auth.php';
