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
    return 'I am the captain noe';
});

Route::group(['middleware' => ['web']], function ()
{
    // your routes here
    Route::get('/session', function (Request $request)
    {
        $data = $request->session()->all();
        return $data;
    });
    Route::get('/game', function (Request $request)
    {
        if (!$request->session()->has('game'))
        {
            $game = new Game();
            $game->startGame();
            $request->session()->put('game', json_encode($game));
        }

        // $request->session(['game' => json_encode($game)]);
        $data = $request->session()->all();
        return $data;
    });
});
