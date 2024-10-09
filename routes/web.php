<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LeadsController;
use App\Http\Middleware\RedirectIfAuthenticated;
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
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin dashboard
Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('update.password');


});

//Sales dashboard
Route::middleware(['auth','role:sales'])->group(function(){
    Route::get('/sales/dashboard', [SalesController::class, 'SalesDashboard'])->name('sales.dashboard');
    Route::get('/sales/logout', [SalesController::class, 'salesDestroy'])->name('sales.logout');
    Route::get('/sales/profile', [SalesController::class, 'salesProfile'])->name('sales.profile');
    Route::post('/sales/profile/store', [SalesController::class, 'salesProfileStore'])->name('sales.profile.store');
    Route::get('/sales/change/password', [SalesController::class, 'salesChangePassword'])->name('sales.change.password');
    Route::post('/sales/update/password', [SalesController::class, 'salesUpdatePassword'])->name('sales.update.password');
    Route::get('/sales/encounters', [SalesController::class, 'salesEncounters'])->name('sales.encounters');
    Route::get('/sales/seller/map', [SalesController::class, 'SalesSellerMap'])->name('sales.seller.map');


});

//Companies
Route::middleware(['auth','role:companies'])->group(function(){
    Route::get('/companies/dashboard', [CompaniesController::class, 'CompaniesDashboard'])->name('companies.dashboard');
    Route::get('/companies/logout', [CompaniesController::class, 'companiesDestroy'])->name('companies.logout');
    Route::get('/companies/profile', [CompaniesController::class, 'companiesProfile'])->name('companies.profile');
    Route::post('/companies/profile/store', [CompaniesController::class, 'companiesProfileStore'])->name('companies.profile.store');
    Route::get('/companies/change/password', [CompaniesController::class, 'companiesChangePassword'])->name('companies.change.password');
    Route::post('/companies/update/password', [CompaniesController::class, 'companiesUpdatePassword'])->name('companies.update.password');
    Route::get('/companies/encounters', [CompaniesController::class, 'companiesEncounters'])->name('companies.encounters');
    Route::get('/companies/liked', [CompaniesController::class, 'companiesLiked'])->name('companies.liked');
    Route::get('/companies/interested', [CompaniesController::class, 'companiesInterested'])->name('companies.interested');
    Route::post('/companies/interested/count', [CompaniesController::class, 'companiesInterestedCount'])->name('companies.interested.count');
    Route::get('/companies/event', [CompaniesController::class, 'companiesEvent'])->name('companies.event');
    Route::post('/companies/event/store', [CompaniesController::class, 'companiesEventStore'])->name('companies.event.store');
    Route::patch('/companies/event/update/{id}', [CompaniesController::class, 'companiesEventUpdate'])->name('companies.event.update');
    Route::get('/companies/item/listing', [CompaniesController::class, 'ItemListingDashboard'])->name('companies.item.listing');


     // Product All Route 
    Route::controller(ProductController::class)->group(function(){
        Route::get('companies/all/product' , 'AllProduct')->name('companies.basic.all.product');
        Route::get('companies/add/basic/product' , 'AddBasicProduct')->name('companies.basic.product.add');
        Route::post('companies/store/basic/product' , 'CompaniesStoreBasicProduct')->name('companies.store.basic.product');
        Route::get('companies/edit/basic/product/{id}' , 'EditBasicProduct')->name('companies.edit.basic.product');
		Route::post('companies/update/basic/product' , 'UpdateBasicProduct')->name('companies.update.basic.product');
        Route::post('companies/update/basic/product/thambnail' , 'UpdateBasicProductThambnail')->name('companies.update.basic.product.thambnail');
        Route::post('companies/update/basic/product/multiimage' , 'UpdateBasicProductMultiimage')->name('companies.update.basic.product.multiimage');
        Route::get('companies/basic/product/multiimg/delete/{id}' , 'BasicProductMulitImageDelelte')->name('companies.basic.product.multiimg.delete');
        Route::get('companies/basic/product/inactive/{id}' , 'BasicProductInactive')->name('basic.product.inactive');
        Route::get('companies/basic/product/active/{id}' , 'BasicProductActive')->name('basic.product.active');
        Route::get('companies/delete/basic/product/{id}' , 'BasicProductDelete')->name('delete.basic.product');
    });

    // Leads 
    Route::controller(LeadsController::class)->group(function(){
        Route::get('companies/all/leads' , 'AllLeads')->name('companies.all.leads');
        Route::get('companies/add/leads' , 'AddLeads')->name('companies.add.leads');

    });

    

});

// Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);
//Route::get('/companies/login', [CompaniesController::class, 'CompaniesLogin'])->name('companies.login');
Route::get('/companies/login', [CompaniesController::class, 'CompaniesLogin'])->name('companies.login')->middleware(RedirectIfAuthenticated::class);
Route::get('/sales/login', [SalesController::class, 'SalesLogin'])->name('sales.login')->middleware(RedirectIfAuthenticated::class);
//Route::get('/sales/login', [SalesController::class, 'SalesLogin'])->name('sales.login');
Route::get('/become/saler', [SalesController::class, 'Becomesaler'])->name('become.saler');
Route::post('/saler/register', [SalesController::class, 'SalerRegister'])->name('saler.register');
