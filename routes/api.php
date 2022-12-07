<?php

use App\Http\Controllers\Api\ArtistController;
use App\Http\Controllers\Api\DataController;
use App\Http\Controllers\Api\EventTicketController;
use App\Http\Controllers\Api\RequestEventController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/category',[DataController::class,'getCategory'])->name('category.index');
Route::post('/category-store',[DataController::class,'storeCategory'])->name('category.store');
Route::get('/category-delete/{id}',[DataController::class,'categoryDelete'])->name('category.delete');

Route::get('/event',[DataController::class,'getEvent'])->name('event.index');
Route::post('/event-store',[DataController::class,'storeEvent'])->name('event.store');
Route::get('/event-delete/{id}',[DataController::class,'deleteEvent'])->name('event.delete');

Route::apiResource('request-event', RequestEventController::class);
