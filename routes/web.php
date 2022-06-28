<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hello', function (Request $request) {
    return response('hello world');
});

// Route::get('/listing', function () {
//     return view('listing', [
//         'listing' => Listing::all()
//     ]);
// });

// Route::get('/listing_item/{listing}', function (Listing $listing) {
//     return view('listing_item', [
//         'listings' => $listing
//     ]);
// });

Route::get('/get_id/{id}', function ($id) {
    return 'id: ' . $id;
})->where('id', '[0-9]+');

Route::get('/', [ListingController::class, 'index'])->name('listing.index');
Route::get('/listing_item/{listing}', [ListingController::class, 'show'])->name('listing.show');
// Route::get('/test', 'TestController@test')->name('test');

// Route::get('/test', [TestController::class, 'test'])->name('test');
