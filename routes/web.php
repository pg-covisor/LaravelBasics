<?php
use App\Http\Middleware\CheckAge;
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
    // return view('welcome');
    // return response('Hello World')->cookie(
    // 'name', 'value');

    // Get the current URL without the query string...
    echo url()->current();

    // Get the current URL including the query string...
    echo url()->full();

    // Get the full URL for the previous request...
    echo url()->previous();
    
    return [1, 2, 3];
});

Route::get('home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});

Route::get('game', function() {
    return redirect()->away('https://www.google.com');
});

Route::get('json', function() {
    return response()->json([
        'name' => 'Abigail',
        'state' => 'CA'
    ]);
});









/* MIDDLEWARE  ON ROUTE */
//127.0.0.1:8000/home/150
// Route::get('/home/{age}', function() {
//     return 'smart';
// })->middleware(CheckAge::class);

/* MULTIPLE MIDDLEWARE ON SINGLE ROUTE*/
// Route::get('/home/{age}', function() {
//     return 'smart';
// })->middleware('beforechk', 'checkage', 'afterchk');

/* MIDDLEWARE GROUP */
// Route::get('/home', function() {
//     return 'smart';
// }/*->middleware('web') 
// the web middleware group is automatically applied to your
// routes/web.php file by the RouteServiceProvider. */
// );

/* MIDDLEWARE ON ROUTE GROUP */
// Route::group(['middleware' => ['beforechk', 'afterchk']], function () {
//     Route::get('/home', function() {
//         return 'smart';
//     });
// });




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
// Route::get('user/{id}', function ($id) {
//     // Only executed if {id} is numeric...
//      return $id;
// });




/* ROUTE GROUPS */

// Middleware
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second Middleware
//     });

//     Route::get('user/profile', function () {
//         // Uses first & second Middleware
//     });
// });

//Namespaces
// Route::namespace('Admin')->group(function () {
//     // Controllers Within The "App\Http\Controllers\Admin" Namespace
//     Route::get('user/profile', function () {
//         return "Namespaces got it";
//     });
// });

// Sub-Domain Routing
// Route::domain('{account}.myapp.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         return 'Sub-Domain Routing';
//     });
// });

// Route Prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('users', function () {
//         return 'Route Prefixes';
//     });
//     Route::get('name', function () {
//         return 'Route Prefixes';
//     });
// });




/* Route Model Binding */

 // Implicit Binding : Automatically fetch User instance for given id
// Route::get('api/users/{user}', function (App\User $user) {
//     return $user->email;
// });

// Explicit Binding : define your explicit model bindings in the boot method of the 
// RouteServiceProvider class:
// public function boot()
// {
//     parent::boot();
//     Route::model('user', App\User::class);
// }
// Route::get('profile/{user}', function (App\User $user) {
//     // Same as above use in case of  Complicate cases only
// });

// Customizing The Key Name
// If you would like model binding to use a database column other than id when 
// retrieving a given model class, you may override the getRouteKeyName method
// on the Eloquent model:
/**
 * Get the route key for the model.
 *
 * return string
 *
 * public function getRouteKeyName()
 * {
 *   return 'slug';
 * }
 **/













/* Route for Default Fallback Error*/
// If not set its 404 Not Found error by default [via middleware]
Route::fallback(function () {
    return 'NOT FOUND';
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