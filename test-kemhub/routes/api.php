<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\PalindromeController;
use App\Http\Controllers\ReverseController;
use App\Http\Controllers\ReverseVariable;
use App\Http\Controllers\SumController;
use App\Http\Controllers\SwapCaseController;
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

Route::get('/length', [ArrayController::class, 'ArrayLength']);
Route::post('/palindrome', [PalindromeController::class, 'Palindrome']);
Route::get('/sum', [SumController::class, 'Sum']);
Route::post('/reverse', [ReverseController::class, 'Reverse']);
Route::post('/swap-case', [SwapCaseController::class, 'swapCase']);
