<?php
use App\Http\Controllers\blog;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', [blog::class, 'Homepage']);
Route::match(['get', 'post'],'/users', [blog::class, 'blogs']);

Route::match(['get', 'post'], '/blog', [blog::class, 'register']);
