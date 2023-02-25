<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoadController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\ConsigneeController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\DispatchController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HolderController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\Add_UserController;
use App\Http\Controllers\DeshboardController;



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
    return view('welcome');
});




Route::prefix('admin')->group(function () {

   Route::get('/',[DeshboardController::class,'index']);
                       //  LoadController

   Route::get('load_entry/add',[LoadController::class,'index']);
   Route::post('load_entry/add',[LoadController::class,'store'])->name('load_entry.add');
   Route::get('load_entry/show',[LoadController::class,'show'])->name('load_entry.show');
   Route::get('load/delete/{id}',[LoadController::class,'delete'])->name('load.delete');
   Route::get('load_entry/edit/{id}',[LoadController::class,'edit'])->name('load_entry.edit');
   Route::put('load_entry/update/{id}',[LoadController::class,'update'])->name('load_entry.update');

                        //   CustomerController

   Route::get('customer/add',[CustomerController::class,'index'])->name('customer');
   Route::post('customer/add',[CustomerController::class,'store'])->name('customer.add');
   Route::get('customer/show',[CustomerController::class,'show'])->name('customer.show');
   Route::get('customer/delete/{id}',[CustomerController::class,'destroy'])->name('customer.delete');
   Route::get('customer/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
   Route::put('customer/update/{id}',[CustomerController::class,'update'])->name('customer.update');

                    //    ShipperController

   Route::get('/shipper/add',[ShipperController::class,'index'])->name('shipper');
   Route::post('/shipper/add',[ShipperController::class,'store'])->name('shipper.add');
   Route::get('shipper/show',[ShipperController::class,'show'])->name('shipper.show');
   Route::get('shipper/delete/{id}',[ShipperController::class,'destroy'])->name('shipper.delete');
   Route::get('shipper/edit/{id}',[ShipperController::class,'edit'])->name('shipper.edit');
   Route::put('shipper/update/{id}',[ShipperController::class,'update'])->name('shipper.update');

                    //  ConsigneeController

   Route::get('/consignee',[ConsigneeController::class,'index'])->name('consignee');
   Route::post('/consignee/add',[ConsigneeController::class,'store'])->name('consignee.add');
   Route::get('/consignee/show',[ConsigneeController::class,'show'])->name('consignee.show');
   Route::get('consignee/delete/{id}',[ConsigneeController::class,'destroy'])->name('delete.consignee');
   Route::get('consignee/edit/{id}',[ConsigneeController::class,'edit'])->name('consignee.edit');
   Route::put('consignee/update/{id}',[ConsigneeController::class,'update'])->name('consignee.update');

                   //    DriverController

   Route::get('driver',[DriverController::class,'index'])->name('driver');
   Route::post('/driver',[DriverController::class,'store'])->name('driver.adddata');
   Route::get('/driver/show',[DriverController::class,'show'])->name('driver.show');
   Route::get('/driver/delete/{id}',[DriverController::class,'destroy'])->name('delete.driver');
   Route::get('driver/edit/{id}',[DriverController::class,'edit'])->name('driver.edit');
   Route::put('driver/update/{id}',[DriverController::class,'update'])->name('driver.update');

                //   EquipmentController

   Route::get('/equipment',[EquipmentController::class,'index'])->name('equipment');
   Route::post('/equipment',[EquipmentController::class,'store'])->name('equipment.add');
   Route::get('/equipment/show',[EquipmentController::class,'show'])->name('equipment.show');
   Route::get('equipment/delete/{id}',[EquipmentController::class,'destroy'])->name('delete.equipment');
   Route::get('equipment/edit/{id}',[EquipmentController::class,'edit'])->name('equipment.edit');
   Route::put('equipment/update/{id}',[EquipmentController::class,'update'])->name('equipment.update');

                    //  DispatchController

   Route::get('/dispatch',[DispatchController::class,'index'])->name('dispatch');
   Route::post('/dispatch/add',[DispatchController::class,'store'])->name('_dispatch.add');
   Route::get('/dispatch/show',[DispatchController::class,'show'])->name('_dispatch.show');
   Route::get('dispatch/delete/{id}',[DispatchController::class,'destroy'])->name('delete.dispatch');
   Route::get('dispatch/edit/{id}',[DispatchController::class,'edit'])->name('dispatch.edit');
   Route::put('dispatch/update/{id}',[DispatchController::class,'update'])->name('dispatch.update');

                            //  HolderController

   Route::get('/account_holder',[HolderController::class,'index'])->name('account_holder');
   Route::post('/account_holder/add',[HolderController::class,'store'])->name('account_holder.add');
   Route::get('/account_holder/show',[HolderController::class,'show'])->name('account_holder.show');
   Route::get('account_holder/delete/{id}',[HolderController::class,'destroy'])->name('delete.holder');
   Route::get('account_holder/edit/{id}',[HolderController::class,'edit'])->name('holder.edit');
   Route::put('account_holder/update/{id}',[HolderController::class,'update'])->name('holder.update');


                        //   ExpenseController

   Route::get('/expense',[ExpenseController::class,'index'])->name('expense');
   Route::post('/expense/add',[ExpenseController::class,'store'])->name('expense.add');
   Route::get('/expense/show',[ExpenseController::class,'show'])->name('expense.show');
   Route::get('expense/delete/{id}',[ExpenseController::class,'destroy'])->name('delete.expense');
   Route::get('expense/edit/{id}',[ExpenseController::class,'edit'])->name('expense.edit');
   Route::put('expense/update/{id}',[ExpenseController::class,'update'])->name('expense.update');


                            // Add_UserController

   Route::get('/add_user',[Add_UserController::class,'index'])->name('adduser');
   Route::post('/add_user/add',[Add_UserController::class,'store'])->name('adduser.add');
   Route::get('/add_user/show',[Add_UserController::class,'show'])->name('adduser.show');
   Route::get('add_user/delete/{id}',[Add_UserController::class,'destroy'])->name('delete.adduser');
   Route::get('add_user/edit/{id}',[Add_UserController::class,'edit'])->name('adduser.edit');
   Route::put('add_user/update/{id}',[Add_UserController::class,'update'])->name('adduser.update');




   Route::get('/report/driver',[ReportController::class,'Driver'])->name('report.driver');






   Route::view('/edit_setting','admin.setting.edit_setting');



//    Route::view('/reportsss','admin.reportbil.driver_pay_report');

});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
