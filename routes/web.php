<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GioiThieuController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\GiaVeController;
use App\Http\Controllers\EventImgController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LichSuHinhThanhController;
use App\Http\Controllers\TicketImgController;
use App\Http\Controllers\VeChiTietController;
use App\Http\Controllers\ChinhSachBaoMatController;
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

// ----------------------Giới thiệu------------------------------------
Route::get('/gioithieu', [GioiThieuController::class, 'index']);

// --------------------------Lịch sử hình thành ------------------------
Route::get('/lichsuhinhthanh', [LichSuHinhThanhController::class, 'index']);

// --------------------------Chính sách bảo mật  ------------------------
Route::get('/chinhsachbaomat', [ChinhSachBaoMatController::class, 'index']);


// ------------------------Vé Chi tiet --------------------------
Route::get('/vechitiet/{ticketID}', [VeChiTietController::class, 'index']);





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


// ----------------------------Ticket----------GiaVeController-------------
Route::get('/ticket_manage', [GiaVeController::class, 'ticket_manage']);
Route::get('/add_ticket', [GiaVeController::class, 'index']);
Route::post('/saveTicket', [GiaVeController::class, 'saveTicket']);
Route::get('/editTicket/{ticketID}', [GiaVeController::class, 'editTicket']);
Route::post('/updateTicket/{ticketID}', [GiaVeController::class, 'updateTicket']);
Route::get('/deleteTicket/{ticketID}', [GiaVeController::class, 'deleteTicket']);



// -------------------------------TicketImg-------------
Route::get('/ticketImg_manage', [TicketImgController::class, 'ticketImg_manage']);
Route::get('/add_ticketImg', [TicketImgController::class, 'index']);
Route::post('/saveTicketImg', [TicketImgController::class, 'saveTicketImg']);
Route::get('/editTicketImg/{ticketImgID}', [TicketImgController::class, 'editTicketImg']);
Route::post('/updateTicketImg/{ticketImgID}', [TicketImgController::class, 'updateTicketImg']);
Route::get('/deleteTicketImg/{ticketImgID}', [TicketImgController::class, 'deleteTicketImg']);


// -----------------------------------Event------------------------------
Route::get('/event_manage', [EventController::class, 'event_manage']);
Route::get('/add_event', [EventController::class, 'index']);
Route::post('/saveEvent', [EventController::class, 'saveEvent']);
Route::get('/editEvent/{eID}', [EventController::class, 'editEvent']);
Route::post('/updateEvent/{eID}', [EventController::class, 'updateEvent']);
Route::get('/deleteEvent/{eID}', [EventController::class, 'deleteEvent']);


// -----------------------------------EventImg------------------------------
Route::get('/eventImg_manage', [EventImgController::class, 'eventImg_manage']);
Route::get('/add_eventImg', [EventImgController::class, 'index']);
Route::post('/saveEventImg', [EventImgController::class, 'saveEvent']);
Route::get('/editEventImg/{eImgID}', [EventImgController::class, 'editEventImg']);
Route::post('/updateEventImg/{eImgID}', [EventImgController::class, 'updateEventImg']);
Route::get('/deleteEventImg/{eImgID}', [EventImgController::class, 'deleteEventImg']);


