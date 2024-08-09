<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

use App\Http\Controllers\KhamPhaController;
use App\Http\Controllers\AdminManageController;
use App\Http\Controllers\AreaController;
// Route::get('/', function () {
//     return view('welcome');
// });



// ------------------------MainPage------------------------------------------


// Route::get('/', function () {
//     return view('homePage');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/trangchu', [HomeController::class, 'index']);




// -----------------Kham Pha------------------------------------------------
Route::get('/khampha', [KhamPhaController::class, 'index']);













//--------------------------------- Admin----------------
Route::get('/admin', [AdminManageController::class, 'index']);

// ---------------------------Area--------------------
Route::get('/area_manage', [AreaController::class, 'area_manage']);
Route::get('/add_area', [AreaController::class, 'add_area']);
Route::post('/saveArea', [AreaController::class, 'saveArea']);
Route::get('/editArea/{areaID}', [AreaController::class, 'editArea']);
Route::post('/updateArea/{areaID}', [AreaController::class, 'updateArea']);
Route::get('/deleteArea/{areaID}', [AreaController::class, 'deleteArea']);
// ------------------------Category-------------------------
Route::get('/category_manage', [CategoryController::class, 'category_manage']);
Route::get('/add_category', [CategoryController::class, 'index']);
Route::post('/saveCategory', [CategoryController::class, 'saveCategory']);
Route::get('/editCategory/{categoryID}', [CategoryController::class, 'editCategory']);
Route::post('/updateCategory/{categoryID}', [CategoryController::class, 'updateCategory']);
Route::get('/deleteCategory/{categoryID}', [CategoryController::class, 'deleteCategory']);
// Route::get('/location_manage', [AreaController::class, 'location_manage']);
// Route::get('/add_area', [AreaController::class, 'add_area']);
// Route::post('/saveArea', [AreaController::class, 'saveArea']);
