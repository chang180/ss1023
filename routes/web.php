<?php

use App\Http\Controllers\BookControler;
use App\Http\Controllers\CarController;
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

/* 以此模式做註解，此為範例
* cars 汽車相關的
*
*/
Route::get('cars/table', [CarController::class,'table']);
Route::post('cars/formData', [CarController::class,'formData'])->name('formData');
Route::post('cars/calData', [CarController::class,'calData'])->name('calData');
//練習：輸入2個數值進入controller，傳回前端這2個數值的乘法表陣列並印出
Route::post('cars/practice', [CarController::class,'practice'])->name('practice');
Route::resource('cars', CarController::class);

/* 
* books 書本相關
*
*/
Route::get('/books/app2/1', [BookControler::class,'index1'])->name('books.child1');
Route::get('/books/app2/2', [BookControler::class,'index2'])->name('books.child2');

Route::resource('books', BookControler::class);


Route::get('/', function () {
    return view('welcome');
});
