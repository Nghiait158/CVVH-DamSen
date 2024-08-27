<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GioiThieuController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\GiaVeController;
use App\Http\Controllers\EventImgController;
use App\Http\Controllers\ThanhVienController;
use App\Http\Controllers\ThucVatController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LichSuHinhThanhController;
use App\Http\Controllers\SuKienController;
use App\Http\Controllers\TicketImgController;
use App\Http\Controllers\VeChiTietController;
use App\Http\Controllers\ChinhSachBaoMatController;
use App\Http\Controllers\LocationImgController;
use App\Http\Controllers\ImgMainPageController;
use App\Http\Controllers\KhamPhaController;
use App\Http\Controllers\AdminManageController;
use App\Http\Controllers\AreaController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/trangchu', [HomeController::class, 'index']);



Route::get('/Extiny', [HomeController::class, 'tiny']);
Route::get('/test', [HomeController::class, 'test']);


// -----------------Kham Pha------------------------------------------------
Route::get('/khampha', [KhamPhaController::class, 'index']);




// ---------------Khám Phá Thưc Vật -------------------------------------
Route::get('/khamphaChiTiet/59', [ThucVatController::class, 'thucvat']);

// ---------------Khám Phá Thưc Vật -------------------------------------
Route::get('/khamphaChiTiet/59/{tvID}', [ThucVatController::class, 'thucvat']);


// ----------------Khám phá chi tiết--------------------------------------
Route::get('/khamphaChiTiet/{loID}', [KhamPhaController::class, 'khamphachitiet']);



// ----------------------Giới thiệu------------------------------------
Route::get('/gioithieu', [GioiThieuController::class, 'index']);

// --------------------------Lịch sử hình thành ------------------------
Route::get('/lichsuhinhthanh', [LichSuHinhThanhController::class, 'index']);

// --------------------------Chính sách bảo mật  ------------------------
Route::get('/chinhsachbaomat', [ChinhSachBaoMatController::class, 'index']);

// --------------------------Thành Viên   ------------------------
Route::get('/thanhvien', [ThanhVienController::class, 'index']);


// ------------------------Vé Chi tiet --------------------------
Route::get('/vechitiet/{ticketID}', [VeChiTietController::class, 'index']);


// ------------------------------------- Sự Kiện------------------------
Route::get('/sukien', [SuKienController::class, 'index']);

// ------------------------Vé Chi tiet --------------------------
Route::get('/sukien/{eID}', [SuKienController::class, 'sukienchitiet']);










//--------------------------------- Admin----------------
Route::get('/admin', [AdminManageController::class, 'index']);

// ---------------------------Area--------------------
Route::get('/area_manage', [AreaController::class, 'area_manage'])->middleware(['auth', 'verified']);
Route::get('/add_area', [AreaController::class, 'add_area'])->middleware(['auth', 'verified']);
Route::post('/saveArea', [AreaController::class, 'saveArea'])->middleware(['auth', 'verified']);
Route::get('/editArea/{areaID}', [AreaController::class, 'editArea'])->middleware(['auth', 'verified']);
Route::post('/updateArea/{areaID}', [AreaController::class, 'updateArea'])->middleware(['auth', 'verified']);
Route::get('/deleteArea/{areaID}', [AreaController::class, 'deleteArea'])->middleware(['auth', 'verified']);

// ------------------------Category---------------------------------------------
Route::get('/category_manage', [CategoryController::class, 'category_manage'])->middleware(['auth', 'verified']);
Route::get('/add_category', [CategoryController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveCategory', [CategoryController::class, 'saveCategory'])->middleware(['auth', 'verified']);
Route::get('/editCategory/{categoryID}', [CategoryController::class, 'editCategory'])->middleware(['auth', 'verified']);
Route::post('/updateCategory/{categoryID}', [CategoryController::class, 'updateCategory'])->middleware(['auth', 'verified']);
Route::get('/deleteCategory/{categoryID}', [CategoryController::class, 'deleteCategory'])->middleware(['auth', 'verified']);

// ----------------------------Location----------------------------------------
Route::get('/location_manage', [LocationController::class, 'location_manage'])->middleware(['auth', 'verified']);
Route::get('/add_location', [LocationController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveLocation', [LocationController::class, 'saveLocation'])->middleware(['auth', 'verified']);
Route::get('/editLocation/{loID}', [LocationController::class, 'editLocation'])->middleware(['auth', 'verified']);
Route::post('/updateLocation/{loID}', [LocationController::class, 'updateLocation'])->middleware(['auth', 'verified']);
Route::get('/deleteLocation/{loID}', [LocationController::class, 'deleteLocation'])->middleware(['auth', 'verified']);

// ------------------------------Location Img-------------------------------------
Route::get('/locationImg_manage', [LocationImgController::class, 'locationImg_manage'])->middleware(['auth', 'verified']);
Route::get('/add_locationImg', [LocationImgController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveLocationImg', [LocationImgController::class, 'saveLocationImg'])->middleware(['auth', 'verified']);
Route::get('/editLocationImg/{loImgID}', [LocationImgController::class, 'editLocationImg'])->middleware(['auth', 'verified']);
Route::post('/updateLocationImg/{loImgID}', [LocationImgController::class, 'updateLocationImg'])->middleware(['auth', 'verified']);
Route::get('/deleteLocationImg/{loImgID}', [LocationImgController::class, 'deleteLocationImg'])->middleware(['auth', 'verified']);

// ------------------------------ThucVat-------------------------------------
Route::get('/thucvat_manage', [ThucVatController::class, 'thucvat_manage'])->middleware(['auth', 'verified']);
Route::get('/add_thucvat', [ThucVatController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveThucVat', [ThucVatController::class, 'saveThucVat'])->middleware(['auth', 'verified']);
Route::get('/editThucVat/{tvID}', [ThucVatController::class, 'editThucVat'])->middleware(['auth', 'verified']);
Route::post('/updateThucVat/{tvID}', [ThucVatController::class, 'updateThucVat'])->middleware(['auth', 'verified']);
Route::get('/deleteThucVat/{tvID}', [ThucVatController::class, 'deleteThucVat'])->middleware(['auth', 'verified']);


// --------------------------imgMainPage----------------------------------------
Route::get('/imgMainPage_manage', [ImgMainPageController::class, 'imgMainPage_manage'])->middleware(['auth', 'verified']);
Route::get('/add_imgMainPage', [ImgMainPageController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveImgMainPage', [ImgMainPageController::class, 'saveImgMainPage'])->middleware(['auth', 'verified']);
Route::get('/editImgMainPage/{imgID}', [ImgMainPageController::class, 'editImgMainPage'])->middleware(['auth', 'verified']);
Route::post('/updateImgMainPage/{imgID}', [ImgMainPageController::class, 'updateImgMainPage'])->middleware(['auth', 'verified']);
Route::get('/deleteImgMainPage/{imgID}', [ImgMainPageController::class, 'deleteImgMainPage'])->middleware(['auth', 'verified']);


// ----------------------------Ticket----------GiaVeController-------------
Route::get('/ticket_manage', [GiaVeController::class, 'ticket_manage'])->middleware(['auth', 'verified']);
Route::get('/add_ticket', [GiaVeController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveTicket', [GiaVeController::class, 'saveTicket'])->middleware(['auth', 'verified']);
Route::get('/editTicket/{ticketID}', [GiaVeController::class, 'editTicket'])->middleware(['auth', 'verified']);
Route::post('/updateTicket/{ticketID}', [GiaVeController::class, 'updateTicket'])->middleware(['auth', 'verified']);
Route::get('/deleteTicket/{ticketID}', [GiaVeController::class, 'deleteTicket'])->middleware(['auth', 'verified']);



// -------------------------------TicketImg-------------
Route::get('/ticketImg_manage', [TicketImgController::class, 'ticketImg_manage'])->middleware(['auth', 'verified']);
Route::get('/add_ticketImg', [TicketImgController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveTicketImg', [TicketImgController::class, 'saveTicketImg'])->middleware(['auth', 'verified']);
Route::get('/editTicketImg/{ticketImgID}', [TicketImgController::class, 'editTicketImg'])->middleware(['auth', 'verified']);
Route::post('/updateTicketImg/{ticketImgID}', [TicketImgController::class, 'updateTicketImg'])->middleware(['auth', 'verified']);
Route::get('/deleteTicketImg/{ticketImgID}', [TicketImgController::class, 'deleteTicketImg'])->middleware(['auth', 'verified']);


// -----------------------------------Event------------------------------
Route::get('/event_manage', [EventController::class, 'event_manage'])->middleware(['auth', 'verified']);
Route::get('/add_event', [EventController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveEvent', [EventController::class, 'saveEvent'])->middleware(['auth', 'verified']);
Route::get('/editEvent/{eID}', [EventController::class, 'editEvent'])->middleware(['auth', 'verified']);
Route::post('/updateEvent/{eID}', [EventController::class, 'updateEvent'])->middleware(['auth', 'verified']);
Route::get('/deleteEvent/{eID}', [EventController::class, 'deleteEvent'])->middleware(['auth', 'verified']);


// -----------------------------------EventImg------------------------------
Route::get('/eventImg_manage', [EventImgController::class, 'eventImg_manage'])->middleware(['auth', 'verified']);
Route::get('/add_eventImg', [EventImgController::class, 'index'])->middleware(['auth', 'verified']);
Route::post('/saveEventImg', [EventImgController::class, 'saveEventImg'])->middleware(['auth', 'verified']);
Route::get('/editEventImg/{eImgID}', [EventImgController::class, 'editEventImg'])->middleware(['auth', 'verified']);
Route::post('/updateEventImg/{eImgID}', [EventImgController::class, 'updateEventImg'])->middleware(['auth', 'verified']);
Route::get('/deleteEventImg/{eImgID}', [EventImgController::class, 'deleteEventImg'])->middleware(['auth', 'verified']);