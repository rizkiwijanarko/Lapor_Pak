<?php

use App\Http\Controllers\ReportController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get_all_reports',  [ReportController::class, 'get_all_reports']);
Route::get('/get_total_reports',  [ReportController::class, 'get_total_reports']);
Route::get('/get_total_not_verified_reports',  [ReportController::class, 'get_total_not_verified_reports']);
Route::get('/get_total_verified_reports',  [ReportController::class, 'get_total_verified_reports']);
Route::get('/get_total_finished_reports',  [ReportController::class, 'get_total_finished_reports']);
Route::get('/get_total_cancelled_reports',  [ReportController::class, 'get_total_cancelled_reports']);
Route::get('/get_total_per_category',  [ReportController::class, 'get_total_per_category']);
Route::get('/get_top_province',  [ReportController::class, 'get_top_province']);
Route::get('/get_monthly_reports',  [ReportController::class, 'get_monthly_reports']);
Route::get('/get_yearly_reports',  [ReportController::class, 'get_yearly_reports']);
Route::get('/v1/get_data',  [ReportController::class, 'get_data']);

Route::post('/lacak_laporan',  [ReportController::class, 'lacak_laporan']);


Route::get('/get_ai_summary',  [ReportController::class, 'get_ai_summary']);

Route::post('/insert_report',  [ReportController::class, 'insert_report']);
Route::put('/update_status',  [ReportController::class, 'update_status']);
