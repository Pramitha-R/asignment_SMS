<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookContoller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/',[LoginController::class,'index']);

Route::post('/checkLogin',[LoginController::class,'checkLogin']);
Route::get('/AdminDash',[AdminController::class,'index']);

Route::get('/create_employee',[EmployeeController::class,'create_employee']);
Route::get('/clickCreate',[EmployeeController::class,'index']);
Route::post('/storeEmployee',[EmployeeController::class,'store']);
Route::get('/edit/{employee}',[EmployeeController::class,'edit']);
Route::post('/update/{employee}',[EmployeeController::class,'update']);
Route::get('/destroy/{emp}',[EmployeeController::class,'destroy']);


Route::get('/service',[AdminController::class,'service']);
Route::get('/addservice',[AdminController::class,'addservice']);
Route::post('/storeService',[AdminController::class,'storeService']);
Route::get('/edit/{service}',[AdminController::class,'edit']);
Route::post('/update/{service}',[AdminController::class,'update']);
Route::get('/destroyservice/{s}',[AdminController::class,'destroy']);

Route::get('/logout',[AdminController::class,'logout']);

           
Route::get('/register',[CustomerController::class,'index']);
Route::post('/storeCustomer',[CustomerController::class,'store']);
Route::get('/bookappointment/{customer}',[CustomerController::class,'bookappointment']);
Route::post('/storebook',[BookContoller::class,'store']);
Route::get('/click_appointment/{customer}',[BookContoller::class,'click_appointment']);

