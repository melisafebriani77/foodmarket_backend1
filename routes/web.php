<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\API\MidtransController;


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

// Homepage
// Route::get('/', function () {
//     return redirect()->route('dashboard');
// });

Route::get('/', function () {
    return view('welcome');
});

//Dashboard
// Route::prefix('dashboard')
//     ->middleware(['auth:sanctum', 'admin'])
//     ->group(function() {
//         Route::get('/',[DashboardController::class, 'index'])->name('dashboard');
        
//     });


//  Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

// //Midtrans related
//  Route::get('midtrans/success', [MidtransController::class,'success']);
// Route::get('midtrans/unfinish', [MidtransController::class,'unfinish']);
// Route::get('midtrans/error', [MidtransController::class,'error']);