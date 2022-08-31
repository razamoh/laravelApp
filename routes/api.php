<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InquiryController;
use Illuminate\Http\Response;

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

//Route versioning
Route::prefix('v1')->group(function () {
    Route::post('inquiry',  [InquiryController::class, 'store']);
});


