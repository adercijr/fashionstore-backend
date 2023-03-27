<?php

use App\Http\Controllers\ProductActivityController;
use App\Http\Controllers\ProductBrandController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGenderController;
use App\Http\Controllers\ProductSizesController;
use App\Http\Controllers\ProductStyleController;
use App\Http\Controllers\ProductVariantsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('product')->group(function () {
    Route::controller(ProductController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');

       
            Route::post('/', 'store');
            Route::put('/{id}', 'update');
            Route::delete('/{id}', 'destroy');
        
    });
});

Route::prefix('variant')->group(function () {
    Route::controller(ProductVariantsController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');
        
        
            Route::post('/', 'store');
            Route::put('/{id}', 'update');
            Route::delete('/{id}', 'destroy');
        
    });
    
});

Route::prefix('size')->group(function () {
    Route::controller(ProductSizesController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/{id}', 'show');

        
            Route::post('/', 'store');
            Route::put('/{id}', 'update');
            Route::delete('/{id}', 'destroy');
        
    });
});

Route::prefix('admin')->group(function () {
    Route::prefix('activity')->group(function () {
        Route::controller(ProductActivityController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
    
            
                Route::post('/', 'store');
                Route::put('/{id}', 'update');
                Route::delete('/{id}', 'destroy');
            
        });
    });
    Route::prefix('brand')->group(function () {
        Route::controller(ProductBrandController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
    
            
                Route::post('/', 'store');
                Route::put('/{id}', 'update');
                Route::delete('/{id}', 'destroy');
            
        });
    });
    Route::prefix('category')->group(function () {
        Route::controller(ProductCategoryController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
    
            
                Route::post('/', 'store');
                Route::put('/{id}', 'update');
                Route::delete('/{id}', 'destroy');
            
        });
    });
    Route::prefix('gender')->group(function () {
        Route::controller(ProductGenderController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
    
            
                Route::post('/', 'store');
                Route::put('/{id}', 'update');
                Route::delete('/{id}', 'destroy');
            
        });
    });
    Route::prefix('style')->group(function () {
        Route::controller(ProductStyleController::class)->group(function () {
            Route::get('/', 'index');
            Route::get('/{id}', 'show');
    
            
                Route::post('/', 'store');
                Route::put('/{id}', 'update');
                Route::delete('/{id}', 'destroy');
            
        });
    });
});




