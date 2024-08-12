<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LocationImgController;
use App\Http\Controllers\ImgMainPageController;
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



Route::get('/Extiny', [HomeController::class, 'tiny']);


// -----------------Kham Pha------------------------------------------------
Route::get('/khampha', [KhamPhaController::class, 'index']);


// ----------------Khám phá chi tiết--------------------------------------


Route::get('/khamphaChiTiet/{loID}', [KhamPhaController::class, 'khamphachitiet']);



//--------------------------------- Admin----------------
Route::get('/admin', [AdminManageController::class, 'index']);

// ---------------------------Area--------------------
Route::get('/area_manage', [AreaController::class, 'area_manage']);
Route::get('/add_area', [AreaController::class, 'add_area']);
Route::post('/saveArea', [AreaController::class, 'saveArea']);
Route::get('/editArea/{areaID}', [AreaController::class, 'editArea']);
Route::post('/updateArea/{areaID}', [AreaController::class, 'updateArea']);
Route::get('/deleteArea/{areaID}', [AreaController::class, 'deleteArea']);

// ------------------------Category---------------------------------------------
Route::get('/category_manage', [CategoryController::class, 'category_manage']);
Route::get('/add_category', [CategoryController::class, 'index']);
Route::post('/saveCategory', [CategoryController::class, 'saveCategory']);
Route::get('/editCategory/{categoryID}', [CategoryController::class, 'editCategory']);
Route::post('/updateCategory/{categoryID}', [CategoryController::class, 'updateCategory']);
Route::get('/deleteCategory/{categoryID}', [CategoryController::class, 'deleteCategory']);

// ----------------------------Location----------------------------------------
Route::get('/location_manage', [LocationController::class, 'location_manage']);
Route::get('/add_location', [LocationController::class, 'index']);
Route::post('/saveLocation', [LocationController::class, 'saveLocation']);
Route::get('/editLocation/{loID}', [LocationController::class, 'editLocation']);
Route::post('/updateLocation/{loID}', [LocationController::class, 'updateLocation']);
Route::get('/deleteLocation/{loID}', [LocationController::class, 'deleteLocation']);

// ------------------------------Location Img-------------------------------------
Route::get('/locationImg_manage', [LocationImgController::class, 'locationImg_manage']);
Route::get('/add_locationImg', [LocationImgController::class, 'index']);
Route::post('/saveLocationImg', [LocationImgController::class, 'saveLocationImg']);
Route::get('/editLocationImg/{loImgID}', [LocationImgController::class, 'editLocationImg']);
Route::post('/updateLocationImg/{loImgID}', [LocationImgController::class, 'updateLocationImg']);
Route::get('/deleteLocationImg/{loImgID}', [LocationImgController::class, 'deleteLocationImg']);





// --------------------------imgMainPage----------------------------------------
Route::get('/imgMainPage_manage', [ImgMainPageController::class, 'imgMainPage_manage']);
Route::get('/add_imgMainPage', [ImgMainPageController::class, 'index']);
Route::post('/saveImgMainPage', [ImgMainPageController::class, 'saveImgMainPage']);
Route::get('/editImgMainPage/{imgID}', [ImgMainPageController::class, 'editImgMainPage']);
Route::post('/updateImgMainPage/{imgID}', [ImgMainPageController::class, 'updateImgMainPage']);
Route::get('/deleteImgMainPage/{imgID}', [ImgMainPageController::class, 'deleteImgMainPage']);



