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


/* ROUTE PARAMETERS */

// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Post Id : '.$postId.' & Comment Id : '.$commentId;
// });

// Nullable parameter
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// Setting Default Parameter
// Route::get('user/{name?}', function ($name = 'John') {
//     return $name;
// });


/* ...Adding Local Condition/Patter to Parameter */

// Route::get('user/{name}', function ($name) {
//      return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('user/{id}', function ($id) {
//     return $id;
// })->where('id', '[0-9]+');

// Route::get('user/{id}/{name}', function ($id, $name) {
//     return 'Id : '.$id.'Name : '.$name;
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

/* ...Adding Global Condition/Patter to Parameter */
// Patterns are define in the boot method of your RouteServiceProvider:
Route::get('user/{id}', function ($id) {
    // Only executed if {id} is numeric...
     return $id;
});





/* ROUTE BASICS */

// $uri = '/model';
// $callback = function() {
//     return 'called by any';
// };

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