<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\NoticeBoard\Http\Controllers\API\NoticeBoardsController;
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


Route::middleware('auth:api')->group(function () {
    Route::get('notice-board', [NoticeBoardsController::class, 'index']);
});
