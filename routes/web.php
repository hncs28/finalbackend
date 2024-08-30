<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CMS\CMSTraditionalController;
use App\Http\Controllers\CMS\CMSProjectsController;
use App\Http\Controllers\CMS\CMSAnnualController;
use App\Http\Controllers\CMS\CMSActivitiesController;
use App\Http\Controllers\CMS\CMSPrizeController;
use App\Http\Controllers\View\AuthController;

#TradiCMS
Route::get('CMS/traditional_room',[CMSTraditionalController::class,'index']);
Route::get('CMS/traditional_room/edit/{tradiID}', [CMSTraditionalController::class,'edit']);
Route::get('/CMS/traditional_room/create', [CMSTraditionalController::class,'create']);
Route::post('/CMS/traditional_room/store', [CMSTraditionalController::class,'store']);
Route::get('/CMS/traditional_room/{tradiID}', [CMSTraditionalController::class,'show']);
Route::DELETE('/CMS/traditional_room/destroy/{tradiID}', [CMSTraditionalController::class,'destroy']);
Route::patch('CMS/traditional_room/update/{tradiID}',[CMSTraditionalController::class,'update']);

#ProjectsCMS
Route::get('CMS/projects',[CMSProjectsController::class,'index']);
Route::get('CMS/projects/edit/{projectID}', [CMSProjectsController::class,'edit']);
Route::get('/CMS/projects/create', [CMSProjectsController::class,'create']);
Route::post('/CMS/projects/store', [CMSProjectsController::class,'store']);
Route::get('/CMS/projects/{projectID}', [CMSProjectsController::class,'show']);
Route::DELETE('/CMS/projects/destroy/{projectID}', [CMSProjectsController::class,'destroy']);
Route::patch('CMS/projects/update/{projectID}',[CMSProjectsController::class,'update']);

#ActivitiesCMS
Route::get('CMS/activities',[CMSActivitiesController::class,'index']);
Route::get('CMS/activities/edit/{actID}', [CMSActivitiesController::class,'edit']);
Route::get('/CMS/activities/create', [CMSActivitiesController::class,'create']);
Route::post('/CMS/activities/store', [CMSActivitiesController::class,'store']);
Route::get('/CMS/activities/{actID}', [CMSActivitiesController::class,'show']);
Route::DELETE('/CMS/activities/destroy/{actID}', [CMSActivitiesController::class,'destroy']);
Route::patch('CMS/activities/update/{actID}',[CMSActivitiesController::class,'update']);

#AnnualCMS
Route::get('CMS/annual',[CMSAnnualController::class,'index']);
Route::get('CMS/annual/edit/{annualID}', [CMSAnnualController::class,'edit']);
Route::get('/CMS/annual/create', [CMSAnnualController::class,'create']);
Route::post('/CMS/annual/store', [CMSAnnualController::class,'store']);
Route::get('/CMS/annual/{annualID}', [CMSAnnualController::class,'show']);
Route::DELETE('/CMS/annual/destroy/{annualID}', [CMSAnnualController::class,'destroy']);
Route::patch('CMS/annual/update/{annualID}',[CMSAnnualController::class,'update']);

#PrizesCMS
Route::get('CMS/prizes',[CMSPrizeController::class,'index']);
Route::get('CMS/prizes/edit/{prizeID}', [CMSPrizeController::class,'edit']);
Route::get('/CMS/prizes/create', [CMSPrizeController::class,'create']);
Route::post('/CMS/prizes/store', [CMSPrizeController::class,'store']);
Route::get('/CMS/prizes/{prizeID}', [CMSPrizeController::class,'show']);
Route::DELETE('/CMS/prizes/destroy/{prizeID}', [CMSPrizeController::class,'destroy']);
Route::patch('CMS/prizes/update/{prizeID}',[CMSPrizeController::class,'update']);


use App\Http\Controllers\View\TraditionalController;
use App\Http\Controllers\View\ProjectsController;
use App\Http\Controllers\View\ActivitiesController;
use App\Http\Controllers\View\AnnualController;
use App\Http\Controllers\View\PrizeController;
use App\Http\Controllers\View\ImageController;


Route::get('/humans',[TraditionalController::class,'index']);
Route::get('/project',[ProjectsController::class,'index']);
Route::get('/activity',[ActivitiesController::class,'index']);
Route::get('/annual',[AnnualController::class,'index']);
Route::get('/prizes',[PrizeController::class,'index']);

Route::get('/storage2/{filename}', [ImageController::class,'showCustomImage']);
Route::get('/sym', function () {
    Artisan::call('storage:link');
});

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/admin',[AuthController::class,'admin']);
Route::get('/registerform',function(){
    return view('CMS/register');
});
Route::post('/register',[AuthController::class,'register'])->name('register');