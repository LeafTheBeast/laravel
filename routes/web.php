<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return response('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/posts/{id}', function ($id){
    return response($id > 10 ? 'Hello' : 'Not hello');
});
/*
Route::get('/test', function () {
    return 'Customer list';
});
*/
Route::get('/user/{id}', function (\Illuminate\Http\Request $request, $id)
{
    return 'User ' . $id;
});

Route::view('/test', 'test');
