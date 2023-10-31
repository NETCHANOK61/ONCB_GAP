<?php

use App\Http\Controllers\businessesController;
use App\Http\Controllers\cbTxController;
use App\Http\Controllers\cooperatePeopleController;
use App\Http\Controllers\cooperationController;
use App\Http\Controllers\importMonthController;
use App\Http\Controllers\importRoutineController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\mangeIntegrationController;
use App\Http\Controllers\policeSchoolController;
use App\Http\Controllers\religiousesController;
use App\Http\Controllers\riskAreaController;
use App\Http\Controllers\schoolTargetController;
use App\Http\Controllers\staffDetailsController;
use App\Http\Controllers\staffEmployeesController;
use App\Http\Controllers\staffInfosController;
use App\Http\Controllers\staffNewcontractsController;
use App\Http\Controllers\staffPerformancesController;
use App\Http\Controllers\staffStatisticsController;
use App\Http\Controllers\staffSumController;
use App\Http\Controllers\villageTrainingsController;
use App\Http\Controllers\YouthOutController;
use App\Models\importMonth;
use App\Models\integraeds;
use App\Models\staffDetails;
use Illuminate\Support\Facades\Route;


Route::resource('main', mainController::class);
Route::resource('riskArea', riskAreaController::class);
Route::resource('religiouses', religiousesController::class);
Route::resource('schoolTarget', schoolTargetController::class);
Route::resource('businesses', businessesController::class);
Route::resource('policeSchool', policeSchoolController::class);
Route::resource('youthOut', YouthOutController::class);
Route::resource('cooperatePeople', cooperatePeopleController::class);
Route::resource('villageTraining', villageTrainingsController::class);
Route::resource('cbTx', cbTxController::class);
Route::resource('cooperation', cooperationController::class);
Route::resource('mangeIntegration', mangeIntegrationController::class);
Route::resource('staffSum', staffSumController::class);
Route::resource('staffEmployees', staffEmployeesController::class);
Route::resource('staffNewcontracts', staffNewcontractsController::class);
Route::resource('staffInfos', staffInfosController::class);
Route::resource('staffPerformances', staffPerformancesController::class);
Route::resource('staffStatistics', staffStatisticsController::class);
Route::resource('staffDetails', staffDetailsController::class);

Route::resource('importRoutine', importRoutineController::class);
Route::resource('importMonths', importMonthController::class);
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
    return view('welcome');
});
