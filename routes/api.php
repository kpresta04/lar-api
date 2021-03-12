<?php

require 'Game.php';

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

Route::middleware('auth:api')->get('/user', function (Request $request)
{
    return $request->user();
});
Route::post('/user', function (Request $request)
{
    http_response_code(300);
    return $request;
});

Route::get('/', function ()
{
    return 'I am the captain now';
});

Route::get('/game', function ()
{
    // $game = new Game();
    session(['game' => 'test1']);
    return session('game');
});
