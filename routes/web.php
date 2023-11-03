<?php

use App\Http\Controllers\businessesController;
use App\Http\Controllers\cbTxController;
use App\Http\Controllers\cbtxesReportController;
use App\Http\Controllers\cbtxesReportSpecificController;
use App\Http\Controllers\communityReportAmountDistrictController;
use App\Http\Controllers\communityReportAmountProvinceController;
use App\Http\Controllers\communityReportAmountSubdistrictController;
use App\Http\Controllers\communityReportDetailVillageController;
use App\Http\Controllers\communityReportOverviewDistrictController;
use App\Http\Controllers\communityReportOverviewProvinceController;
use App\Http\Controllers\communityReportOverviewSubdistrictController;
use App\Http\Controllers\communityReportOverviewVillageController;
use App\Http\Controllers\communityReportPersonController;
use App\Http\Controllers\communityReportProblemController;
use App\Http\Controllers\communityReportRequestController;
use App\Http\Controllers\communityReportStatisticalController;
use App\Http\Controllers\communityReportVillageCompareController;
use App\Http\Controllers\communityReportVillageController;
use App\Http\Controllers\cooperatePeopleController;
use App\Http\Controllers\cooperationController;
use App\Http\Controllers\importMonthController;
use App\Http\Controllers\importRoutineController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\mangeIntegrationController;
use App\Http\Controllers\monthReporBudProvinceController;
use App\Http\Controllers\monthReportBudZoneController;
use App\Http\Controllers\monthReportHighlightController;
use App\Http\Controllers\monthReportMeetingDocController;
use App\Http\Controllers\monthReportMeetingProvinceController;
use App\Http\Controllers\monthReportMeetingZoneController;
use App\Http\Controllers\monthReportNewsProvinceController;
use App\Http\Controllers\monthReportNewsZoneController;
use App\Http\Controllers\monthReportOverviewProvinceController;
use App\Http\Controllers\monthReportOverviewZoneController;
use App\Http\Controllers\monthReportSpendingProvinceController;
use App\Http\Controllers\monthReportSpendingZoneController;
use App\Http\Controllers\policeSchoolController;
use App\Http\Controllers\religiousesController;
use App\Http\Controllers\religiousReportDistrictController;
use App\Http\Controllers\religiousReportOverviewController;
use App\Http\Controllers\religiousReportProvinceController;
use App\Http\Controllers\religiousReportZoneController;
use App\Http\Controllers\riskAreaReportTypeSubdistrictController;
use App\Http\Controllers\riskAreaController;
use App\Http\Controllers\riskAreaReportOverviewController;
use App\Http\Controllers\riskAreaReportResultDistrictController;
use App\Http\Controllers\riskAreaReportResultProvinceController;
use App\Http\Controllers\riskAreaReportResultSubdistrictController;
use App\Http\Controllers\riskAreaReportSumController;
use App\Http\Controllers\riskAreaReportTypeDistrictController;
use App\Http\Controllers\riskAreaReportTypeProvinceController;
use App\Http\Controllers\schoolReportChildrenController;
use App\Http\Controllers\schoolReportController;
use App\Http\Controllers\schoolReportStratigicController;
use App\Http\Controllers\schoolTargetController;
use App\Http\Controllers\staffDetailsController;
use App\Http\Controllers\staffEmployeesController;
use App\Http\Controllers\staffInfosController;
use App\Http\Controllers\staffNewcontractsController;
use App\Http\Controllers\staffPerformancesController;
use App\Http\Controllers\staffStatisticsController;
use App\Http\Controllers\staffSumController;
use App\Http\Controllers\villageTrainingOverviewController;
use App\Http\Controllers\villageTrainingProvinceController;
use App\Http\Controllers\villageTrainingsController;
use App\Http\Controllers\villageTrainingSumController;
use App\Http\Controllers\YouthOutController;
use App\Http\Controllers\youthOutReportDistrictController;
use App\Http\Controllers\youthOutReportSubDistrictController;
use App\Http\Controllers\youthOutReportOverviewController;
use App\Http\Controllers\youthOutReportProvinceController;
use App\Http\Controllers\youthOutReportSumController;
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

Route::resource('religiousReportZone', religiousReportZoneController::class);
Route::resource('religiousReportProvince', religiousReportProvinceController::class);
Route::resource('religiousReportOverview', religiousReportOverviewController::class);
Route::resource('religiousReportDistrict', religiousReportDistrictController::class);

Route::resource('cbtxesReport', cbtxesReportController::class);
Route::resource('cbtxesReportSpecific', cbtxesReportSpecificController::class);

Route::resource('youthOutReportSum', youthOutReportSumController::class);
Route::resource('youthOutReportOverview', youthOutReportOverviewController::class);
Route::resource('youthOutReportProvince', youthOutReportProvinceController::class);
Route::resource('youthOutReportDistrict', youthOutReportDistrictController::class);
Route::resource('youthOutReportSubDistrict', youthOutReportSubDistrictController::class);

Route::resource('riskAreaReportTypeSubdistrict', riskAreaReportTypeSubdistrictController::class);
Route::resource('riskAreaReportTypeDistrict', riskAreaReportTypeDistrictController::class);
Route::resource('riskAreaReportTypeProvince', riskAreaReportTypeProvinceController::class);
Route::resource('riskAreaReportResultDistrict', riskAreaReportResultDistrictController::class);
Route::resource('riskAreaReportResultProvince', riskAreaReportResultProvinceController::class);
Route::resource('riskAreaReportResultSubdistrict', riskAreaReportResultSubdistrictController::class);
Route::resource('riskAreaReportOverview', riskAreaReportOverviewController::class);
Route::resource('riskAreaReportSum', riskAreaReportSumController::class);
Route::resource('villageTrainingSum', villageTrainingSumController::class);
Route::resource('villageTrainingOverview', villageTrainingOverviewController::class);
Route::resource('villageTrainingProvince', villageTrainingProvinceController::class);

Route::resource('schoolReportStratigic', schoolReportStratigicController::class);
Route::resource('schoolReportChildren', schoolReportChildrenController::class);
Route::resource('schoolReport', schoolReportController::class);

Route::resource('communityReportRequest', communityReportRequestController::class);
Route::resource('communityReportPerson', communityReportPersonController::class);
Route::resource('communityReportStatistical', communityReportStatisticalController::class);
Route::resource('communityReportOverviewSub', communityReportOverviewSubdistrictController::class);
Route::resource('communityReportOverviewProvince', communityReportOverviewProvinceController::class);
Route::resource('communityReportDetailVillage', communityReportDetailVillageController::class);
Route::resource('communityReportOverviewDistrict', communityReportOverviewDistrictController::class);
Route::resource('communityReportOverviewVillage', communityReportOverviewVillageController::class);
Route::resource('communityReportAmountSubdistrict', communityReportAmountSubdistrictController::class);
Route::resource('communityReportAmountProvince', communityReportAmountProvinceController::class);
Route::resource('communityReportAmountDistrict', communityReportAmountDistrictController::class);
Route::resource('communityReportVillage', communityReportVillageController::class);
Route::resource('communityReportProblem', communityReportProblemController::class);
Route::resource('communityReportVillageCompare', communityReportVillageCompareController::class);

Route::resource('monthReportHighlight', monthReportHighlightController::class);
Route::resource('monthReportBudProvince', monthReporBudProvinceController::class);
Route::resource('monthReportBudZone', monthReportBudZoneController::class);
Route::resource('monthReportMeetingProvince', monthReportMeetingProvinceController::class);
Route::resource('monthReportMeetingZone', monthReportMeetingZoneController::class);
Route::resource('monthReportNewsProvince', monthReportNewsProvinceController::class);
Route::resource('monthReportNewsZone', monthReportNewsZoneController::class);
Route::resource('monthReportSpendingProvince', monthReportSpendingProvinceController::class);
Route::resource('monthReportSpendingZone', monthReportSpendingZoneController::class);
Route::resource('monthReportOverviewProvince', monthReportOverviewProvinceController::class);
Route::resource('monthReportOverviewZone', monthReportOverviewZoneController::class);
Route::resource('monthReportMeetingDoc', monthReportMeetingDocController::class);
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
    return view('login');
    // return view('welcome');
});

Route::get('/2', function () {
    return view('login_2');
    // return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});
