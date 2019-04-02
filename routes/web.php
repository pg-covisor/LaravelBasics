<?php

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

$uri = '/model';
$callback = function() {
    return 'called by any';
};

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'options'], $uri, $callback);

// Route::any($uri, $callback);

// Route::redirect($uri, '/');

// Route::view('test', 'welcome');

// Route::view('test', 'welcome', ['name' => 'Taylor']);