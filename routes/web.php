<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/page', [PageController::class, 'index']);

// Route::any('/any', function () {
//     return 'ANY';
// });
// Route::match(['get', 'post'], '/match', function () {
//     return 'MATCH';
// });


// // 127.0.0.1:8000/request-data?nama=bariq&kota=malang
// Route::get('/request-data', function (Request $request) {
//     // ['php', 'javascript', 'java']
//     dd(['php', 'javascript', 'java']);

//     echo 'Nama : ' . $request->nama . '<br>';
//     echo 'Kota : ' . $request->kota;
// });
// Route::get('/data-controller', [PageController::class, 'data']);

// Route::get('/index', function () {
//     return view('welcome');
// });

// Route::redirect('/', '/index', 301);
// Route::view('/welcome', 'welcome');

// // Route::get('/blog', function () {
// //     return 'Blog';
// // });
// Route::get('/blog/{slug?}', function ($slug = 'tidak-ada-slug') {
//     return $slug;
// });

// Route::get('/category/{category}/blog/{slug}', function ($category, $slug) {
//     return $category . '-' . $slug;
// });

// // http://127.0.0.1:8000/data?program=php,java,c,javascript,dart
// // http://127.0.0.1:8000/data?program[]=php&program[]=javascript&program[]=java&program[]=c&program[]=dart
// Route::get('/data', function (Request $request) {
//     $program = $request->program;
//     // Cara 1
//     $program = explode(',', $request->program);
//     return $program;
// });


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Group Routing
Route::prefix('/admin')->controller(AdminController::class)->name('admin.')->group(function () {

    Route::get('/dashboard', 'index')->name('dashboard');
    Route::get('/chart', 'chart')->name('chart');
    Route::get('/table', 'table')->name('table');
});

Route::controller(AuthController::class)->name('auth.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
});

Route::prefix('/admin/school')->controller(SchoolController::class)->name('school.')->group(function () {
    Route::get('/', 'index')->name('index');

    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');

    Route::get('/{id}', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');

    Route::delete('/{id}', 'destroy')->name('destroy');
});

Route::resource('/admin/student', StudentController::class)->except(['show']);
