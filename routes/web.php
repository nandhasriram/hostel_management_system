<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AccommodationController;
use App\Http\Controllers\MessController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MessBillController;
use App\Http\Controllers\HostelBillController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('students', StudentController::class);
Route::resource('rooms', RoomController::class);
Route::resource('accommodations', AccommodationController::class);
Route::resource('mess', MessController::class);
Route::resource('fees', FeeController::class);
Route::resource('stock', StockController::class);
Route::resource('staff', StaffController::class);
Route::resource('payroll', PayrollController::class);
Route::resource('certificates', CertificateController::class);
Route::resource('visitors', VisitorController::class);
Route::resource('attendance', AttendanceController::class);
Route::resource('maintenance', MaintenanceController::class);
Route::resource('mess_bills', MessBillController::class);
Route::resource('hostel_bills', HostelBillController::class);
