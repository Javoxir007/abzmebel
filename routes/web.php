<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\QuestionAdminController;
use App\Http\Controllers\Admin\CallAdminController;
use App\Http\Controllers\Admin\DesignAdminController;
use App\Http\Controllers\Admin\ImageAdminController;


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


//tepaga
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::get('/test', function() {
    App::setLocale('uz');
    dd(App::getLocale());
}); */
//tepaga


// pastga
Route::get('/question_admin', [QuestionAdminController::class, 'index'])->name('question_admin');
Route::get('/call', [CallAdminController::class, 'index'])->name('call');
Route::get('/free_design_admin', [DesignAdminController::class, 'freeDesignAdmin'])->name('free_design_admin');
Route::get('/call_specialist_admin', [DesignAdminController::class, 'callSpecialistAdmin'])->name('call_specialist_admin');

/* Image */
Route::prefix('admin.photo')->name('admin.photo.')->group(function() {
    Route::get('/', [ImageAdminController::class, 'index'])->name('index');
    Route::get('/create', [ImageAdminController::class, 'create'])->name('create');
    Route::post('/store', [ImageAdminController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ImageAdminController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [ImageAdminController::class, 'update'])->name('update');
    Route::delete('/{id}', [ImageAdminController::class, 'destroy'])->name('destroy');
});
//pastga


Route::redirect('/', '/ru');

Route::group(['prefix' => '{language}'], function () {

    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/test', [PageController::class, 'test'])->name('test');

    //tepaga - shu joyga

    Route::post('/free_design', [DesignController::class, 'freeDesign'])->name('free_design');
    Route::post('/call_specialist', [CallController::class, 'callSpecialist'])->name('call_specialist');
    Route::post('/question', [QuestionController::class, 'question'])->name('question');

    //pastga - shu joyga
});
