<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/pages', [Controller::class, 'pages'] )->name('pages');
Route::get('/page/edit/{id?}', [Controller::class, 'page_edit'] )->name('page.edit');
Route::get('/page/view/{id?}', [Controller::class, 'page_view'] )->name('page.view');
Route::get('/page/render/{id?}', [Controller::class, 'page_render'] )->name('page.render');
Route::post('/page/save/', [Controller::class, 'page_save'] )->name('page.save');
Route::get('/get_new_block/{id?}', [Controller::class, 'get_new_block'] )->name('get.new.block');
Route::get('/create_new_block/{id?}', [Controller::class, 'create_new_block'] )->name('create.new.block');
Route::get('/edit_block/{id?}/{content_type?}', [Controller::class, 'edit_block'] )->name('edit.block');
Route::get('/get_block_html/{id?}', [Controller::class, 'get_block_html'] )->name('get.block.html');