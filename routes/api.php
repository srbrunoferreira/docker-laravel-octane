<?php

use App\Http\Controllers\ApiTokenController;
use App\Postcode\PostcodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/test', [ApiTokenController::class, 'index']);

// TODO: must add creation of tokens to access these endpoints.
// TODO: also, some tokens may have throttling

Route::get('/postcode/br/{cep}', [PostcodeController::class, 'forBrazil'])->where('cep', '[0-9]{8}');
Route::get('/postcode/pt/{postcode}', [PostcodeController::class, 'forPortugal'])->where('postcode', '[0-9]{7}');
