<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\RequirementController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Public routes (no authentication required)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);

    // Resource routes
    Route::apiResource('applicants', ApplicantController::class);
    Route::apiResource('scholarships', ScholarshipController::class);
    Route::apiResource('requirements', RequirementController::class);
    Route::apiResource('applications', ApplicationController::class);
    Route::apiResource('documents', DocumentController::class);

    // Reports
    Route::get('/reports/applicants', [ReportController::class, 'applicantReport']);
    Route::get('/reports/scholarships', [ReportController::class, 'scholarshipReport']);
    Route::get('/reports/approved', [ReportController::class, 'approvedScholars']);
});