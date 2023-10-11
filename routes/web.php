<?php

use App\Http\Controllers\Corporation\ExtractionsController;
use App\Http\Controllers\Corporation\ObserversController;
use App\Http\Controllers\ESI\ESITokensController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\Logout;

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
@include_once('admin_web.php');

Route::view('sample-page', 'admin.pages.sample-page')->name('sample-page');

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'admin.dashboard.default')->name('index');
    Route::view('default', 'admin.dashboard.default')->name('dashboard.index');
});

Route::view('default-layout', 'multiple.default-layout')->name('default-layout');
Route::view('compact-layout', 'multiple.compact-layout')->name('compact-layout');
Route::view('modern-layout', 'multiple.modern-layout')->name('modern-layout');

Route::get('/', [ExtractionsController::class, 'index'])
->middleware('auth')
->name('index');
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
Route::get('/logout', [Logout::class, 'logout'])
->name('logout');


Route::get('/extractions', [ExtractionsController::class, 'index'])
->middleware('auth')
->name('extractions');

Route::get('/extractions/all', [ExtractionsController::class, 'all_extractions'])
->middleware('auth')
->name('all_extractions');

Route::get('/extractions/{id}/view', [ExtractionsController::class, 'view_extraction'])
->middleware('auth')
->name('view_extraction');

Route::get('/extractions/corporation/{id}/view', [ExtractionsController::class, 'view_corporation_extractions'])
->middleware('auth')
->name('view_corporation_extraction');

Route::get('/extractions/update', [ExtractionsController::class, 'update_extractions'])
->middleware('auth')
->name('update_extractions');

Route::get('/extractions/observers/update', [ObserversController::class, 'update_observers'])
->middleware('auth')
->name('update_extraction_observers');

Route::get('/extractions/observed/{id}/view', [ObserversController::class, 'view_observed'])
->middleware('auth')
->name('view_observers');

Route::get('/test', function() {
    dd(Auth::user());
});


require __DIR__.'/auth.php';
