<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\InspectorDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserMapController;
use App\Http\Controllers\UserReportController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('homePage');
})->name('homePage');

Route::get('/map', [UserMapController::class, 'create'])->name('map');

Route::get('registerUser', function () {
    return view('registerUser');
})->name('registerUser');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::get('/profilePage', function () {
    return view('profilePage');
})->name('profilePage');

// UserReportController create http://127.0.0.1:8000/reportForm?lat=0&lng=0
Route::get('/reportForm', [UserReportController::class, 'create'])->name('createReport');

Route::get('/reportAnonymus', [UserReportController::class, 'createAnonymus'])->name('reportAnonymus');

Route::post('/submitReportForm', [UserReportController::class, 'store'])->name('submitReportForm');




Route::get('/aboutUs', function () {
    return view('aboutUs');
})->name('aboutUs');
Route::get('/myReports', function () {
    return view('myReports');
})->name('myReports');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/adminPanel', [AdminPanelController::class, 'adminPanel'])->name('adminPanel');
Route::post('/assignInspector', [AdminPanelController::class, 'assignInspector'])->name('assignInspector');
Route::post('/createInspector', [AdminPanelController::class, 'createInspector'])->name('createInspector');
Route::get('/generatePdf', [AdminPanelController::class, 'generatePdf'])->name('generatePdf');

Route::get('/inspectorDashboard', [InspectorDashboardController::class, 'inspectorDashboard'])->name('inspectorDashboard');
Route::get('/caseResolution/{id}', [InspectorDashboardController::class, 'caseResolution'])->name('caseResolution');
Route::post('/updateReport', [InspectorDashboardController::class, 'updateReport'])->name('updateReport');