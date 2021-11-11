<?php

use App\Http\Controllers\GiangVienController;
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
    return view('index');
})->name('trang-chu');
Route::get('giang-vien', [GiangVienController::class, 'danhSach'])->name('ds-giang-vien');

Route::get('giang-vien/them-moi', [GiangVienController::class, 'formThemMoi'])->name('them-moi-giang-vien');

Route::post('giang-vien/them-moi', [GiangVienController::class, 'themMoi'])->name('xl-them-moi-giang-vien');

Route::get('giang-vien/cap-nhat/{id}', [GiangVienController::class, 'formCapNhat'])->name('cap-nhat-giang-vien');

Route::post('giang-vien/cap-nhat/{id}', [GiangVienController::class, 'capNhat'])->name('xl-cap-nhat-giang-vien');

