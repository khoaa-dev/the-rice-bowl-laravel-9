<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\EvaluateController;
use App\Http\Controllers\client\MenuController;
use App\Http\Controllers\client\FoodController;
use App\Http\Controllers\client\OrderController;
use App\Http\Controllers\client\ServiceController;
use App\Http\Controllers\client\SocialController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\client\PayPalController;
use App\Http\Controllers\client\UserController;
use App\Http\Controllers\client\AddressController;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\FoodController as AdminFoodController;
use App\Http\Controllers\Admin\UserController as AdminAccountController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('home-page-no-slug');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu-page');

Route::get('/service', [ServiceController::class, 'index'])->name('service-page');

Route::get('/service/{id}', [ServiceController::class, 'show'])->name('package-page');

Route::get('/about', [HomeController::class, 'renderAboutPage'])->name('about-page');

Route::get('/login', [HomeController::class, 'renderLoginPage'])->name('login-page');

Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);

Route::get('/callback/{provider}', [SocialController::class, 'callback']);

Auth::routes();


// Evaluates routes
// Route::post('/evaluate', 'EvaluateController@send_comment')->name('send_comment');
Route::post('/evaluate', [EvaluateController::class, 'send_comment'])->name('send');

// Handle Ajax
Route::post('/search', [FoodController::class, 'getSearchAjax'])->name('search');

Route::post('/add-food', [FoodController::class, 'addFood'])->name('addFood');

Route::post('/remove-food', [FoodController::class, 'removeFood'])->name('removeFood');

Route::post('/init-session', [FoodController::class, 'initSession'])->name('initSession');

Route::get('/update-menu', [FoodController::class, 'updateMenu'])->name('updateMenu');

Route::middleware('auth')->group(function () {
    // Handle Order
    Route::post('/order-create', [OrderController::class, 'createOrder'])->name('createOrder');

    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('getOrder');
    Route::get('/confirmOrder/{id}', [OrderController::class, 'confirmOrder'])->name('confirmOrder');

    // Handle Paypal Payment
    Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');

    Route::post('process-transaction/{id}', [OrderController::class, 'processPayment'])->name('processPayment');

    Route::get('success-transaction/{id}/{paymentId}', [PayPalController::class, 'successTransaction'])->name('successTransaction');

    Route::get('cancel-transaction/{id}', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');

    // Handle User Profile
    Route::prefix('profile')->group(function () {

        Route::get('/infor', [UserController::class, 'index'])->name('profile');

        Route::get('/history', [UserController::class, 'history'])->name('history');

        Route::post('/update', [UserController::class, 'updateInfor'])->name('updateInfor');

        Route::post('/district', [AddressController::class, 'getDistrict'])->name('getDistrict');

        Route::post('/village', [AddressController::class, 'getVillage'])->name('getVillage');
    });
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');

    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::post('/filter-by-date', [AdminController::class, 'filter_by_date'])->name('filter-by-date');

    Route::post('/filter-by-service', [AdminController::class, 'filter_by_service'])->name('filter-by-service');

    Route::middleware(['isAdmin'])->group(function () {
        Route::get('/home', [AdminController::class, 'index'])->name('adminHome');

        Route::get('/', [AdminController::class, 'index'])->name('adminHomeNoSlug');

        Route::get('/', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');

        Route::get('/form-validation', function () {
            return view('admin.form_validation');
        });

        Route::get('/form-wizards', function () {
            return view('admin.form_wizards');
        });

        Route::get('/form', function () {
            return view('admin.form');
        });

        Route::get('/icons', function () {
            return view('admin.icons');
        });

        Route::get('/glyphicons', function () {
            return view('admin.glyphicons');
        });

        Route::get('/invoice', function () {
            return view('admin.invoice');
        });

        Route::get('/profile', function () {
            return view('admin.profile');
        });

        Route::get('/projects', function () {
            return view('admin.projects');
        });

        Route::get('/project-detail', function () {
            return view('admin.project_detail');
        });

        Route::get('/contacts', function () {
            return view('admin.contacts');
        });

        Route::get('/tables', function () {
            return view('admin.tables');
        });

        Route::get('/tables-dynamic', function () {
            return view('admin.tables_dynamic');
        });

        //Food Management
        Route::get('/food-management', [AdminFoodController::class, 'index'])->name('food-management');

        Route::get('/add-food', [AdminFoodController::class, 'create'])->name('create-food');

        Route::post('/add-food', [AdminFoodController::class, 'store'])->name('add-food');

        Route::get('/edit-food/{id}', [AdminFoodController::class, 'edit']);

        Route::post('/update-food/{id}', [AdminFoodController::class, 'update']);

        Route::get('/delete-food/{id}', [AdminFoodController::class, 'destroy']);

        //Order Management
        Route::get('/orders', [AdminOrderController::class, 'index'])->name('getListOrder');

        Route::get('/orders/{id}', [AdminOrderController::class, 'show'])->name('showOrder');

        Route::post('/orders/{id}/confirm', [AdminOrderController::class, 'confirmOrder'])->name('adminConfirmOrder');

        // Service Category
        Route::resource('service', 'App\Http\Controllers\Admin\ServiceController');

        Route::post('/orders/{id}/confirm', [AdminOrderController::class, 'confirmOrder'])->name('adminConfirmOrder');

        //Menu Management
        Route::get('/menu-management', [AdminMenuController::class, 'index'])->name('menu-management');

        Route::get('/add-menu', [AdminMenuController::class, 'create'])->name('create-menu');

        Route::post('/add-menu', [AdminMenuController::class, 'store'])->name('add-menu');

        Route::get('/edit-menu/{id}', [AdminMenuController::class, 'edit'])->name('edit-menu');

        Route::post('/update-menu/{id}', [AdminMenuController::class, 'update'])->name('update-menu');

        Route::get('/delete-menu/{id}', [AdminMenuController::class, 'destroy']);

        //Service Management
        Route::get('/service-management', [AdminServiceController::class, 'index'])->name('service-management');

        Route::get('/add-service', [AdminServiceController::class, 'create'])->name('create-service');

        Route::post('/add-service', [AdminServiceController::class, 'store'])->name('add-service');

        Route::get('/edit-service/{id}', [AdminServiceController::class, 'edit'])->name('edit-service');

        Route::post('/update-service/{id}', [AdminServiceController::class, 'update'])->name('update-service');

        Route::get('/delete-service/{id}', [AdminServiceController::class, 'destroy']);

        // Account Management
        Route::get('/accounts', [AdminAccountController::class, 'index']);

        Route::get('/accounts/{id}', [AdminAccountController::class, 'show']);

        Route::post('/accounts/{id}', [AdminAccountController::class, 'update']);

        //information restaurant
        Route::get('information', [AdminHomeController::class, 'show']);

        Route::post('information/update/{id}',  [AdminHomeController::class, 'update']);
    });
});
