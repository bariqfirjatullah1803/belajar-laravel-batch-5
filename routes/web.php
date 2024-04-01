<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', [PageController::class, 'index']);

Route::any('/any', function () {
    return 'ANY';
});
Route::match(['get', 'post'], '/match', function () {
    return 'MATCH';
});


// 127.0.0.1:8000/request-data?nama=bariq&kota=malang
Route::get('/request-data', function (Request $request) {
    // ['php', 'javascript', 'java']
    dd(['php', 'javascript', 'java']);

    echo 'Nama : ' . $request->nama . '<br>';
    echo 'Kota : ' . $request->kota;
});
Route::get('/data-controller', [PageController::class, 'data']);

Route::get('/index', function () {
    return view('welcome');
});

Route::redirect('/', '/index', 301);
Route::view('/welcome', 'welcome');

// Route::get('/blog', function () {
//     return 'Blog';
// });
Route::get('/blog/{slug?}', function ($slug = 'tidak-ada-slug') {
    return $slug;
});

Route::get('/category/{category}/blog/{slug}', function ($category, $slug) {
    return $category . '-' . $slug;
});