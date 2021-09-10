<?php
use App\Http\Controllers\NewsController;
use App\Http\Controllers\News2Controller;
use App\Http\Controllers\News1Controller;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\TeacherPController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\Event1Controller;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CorseController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseSingleController;
use App\Http\Controllers\CycleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Student\StudentreRegController;
use App\Http\Controllers\TemporyStudentController;

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

// welcome page
Route::get('/', function () {
    return view('frontend.home.welcome');
});

// inscription
Route::prefix('/inscription')->group(function () {
    Route::get('/', function () {
        return view('frontend.inscription.index');
    });
    Route::post('/store', [TemporyStudentController::class, 'store'])->name('add.student');
    Route::get('/pdf/{student}', [TemporyStudentController::class, 'print'])->name('print.fiche_pre_inscription');
});

Route::get('/formations',function(){
    return view('formation.formation');
});
Route::prefix('/formations')->group(function(){

    Route::get('/{cycle}',[CycleController::class, 'ReturnFormationByCycle']);
    Route::get('/cycle_bts/{type}',[CycleController::class, 'ReturnCycle_BtsByType']);
    Route::get('/cycle_licence/{type}',[CycleController::class, 'ReturnCycle_licenceByType']);
    Route::get('/cycle_master/{type}',[CycleController::class, 'ReturnCycle_masterByType']);

    
});




Route::get('/formations/cycle_bts/project-management', function () {
    return view('formation.filiere.projectmanagement');
});
Route::get('/formations/cycle_bts/accounting', function () {
    return view('formation.filiere.accounting');
});
Route::get('/formations/cycle_bts/event-management', function () {
    return view('formation.filiere.eventmanagement');
});
Route::get('/formations/cycle_bts/insurance', function () {
    return view('formation.filiere.insurance');
});
Route::get('/formations/cycle_bts/assistant-manager', function () {
    return view('formation.filiere.assistantmanager');
});
Route::get('/formations/cycle_bts/statistics', function () {
    return view('formation.filiere.statistics');
});
Route::get('/formations/cycle_bts/port-shipping-management', function () {
    return view('formation.filiere.portshippingmanagement');
});
Route::get('/formations/cycle_bts/management-of-non-gouvementalorganization', function () {
    return view('formation.filiere.managementofnonGouvementalOrganization');
});
Route::get('/formations/cycle_bts/construction', function () {
    return view('formation.filiere.construction');
});
Route::get('/formations/cycle_bts/refrigeration-and-air-conditioning', function () {
    return view('formation.filiere.refrigerationandairconditioning');
});
Route::get('/formations/cycle_bts/electrotechnics', function () {
    return view('formation.filiere.electrotechnics');
});
Route::get('/formations/cycle_bts/topography', function () {
    return view('formation.filiere.topography');
});
Route::get('/formations/cycle_bts/management', function () {
    return view('formation.filiere.management');
});
Route::get('/formations/cycle_bts/industrialcomputing', function () {
    return view('formation.filiere.industrialcomputing');
});
Route::get('/formations/cycle_bts/MaintenanceOfComputerSystems', function () {
    return view('formation.filiere.MaintenanceOfComputerSystems');
});
Route::get('/formations/cycle_bts/OperationAirTransport', function () {
    return view('formation.filiere.OperationAirTransport');
});


/** Route pour les filiéres du MASTER1 */


Route::get('/formations/cycle_master/mcp1', function () {
    return view('formation.filiere.mcp1');
});

Route::get('/formations/cycle_master/mcf1', function () {
    return view('formation.filiere.mcf1');
});

Route::get('/formations/cycle_master/mqse1', function () {
    return view('formation.filiere.mqse1');
});

Route::get('/formations/cycle_master/mmsl1', function () {
    return view('formation.filiere.mmsl1');
});

/**Route pour les filiéres MASTER2 */
Route::get('/formations/cycle_master/mbf2', function () {
    return view('formation.filiere.mbf2');
});

Route::get('/formations/cycle_master/mfa2', function () {
    return view('formation.filiere.mfa2');
});

Route::get('/formations/cycle_master/mcp2', function () {
    return view('formation.filiere.mcp2');
});

Route::get('/formations/cycle_master/mgrh2', function () {
    return view('formation.filiere.mgrh2');
});

Route::get('/formations/cycle_master/mqse2', function () {
    return view('formation.filiere.mqse2');
});

Route::get('/formations/cycle_master/mmsl2', function () {
    return view('formation.filiere.mmsl2');
});

Route::get('/formations/cycle_master/mm2', function () {
    return view('formation.filiere.mm2');
});

Route::get('/formations/cycle_master/macg2', function () {
    return view('formation.filiere.macg2');
});

Route::get('/abouts', [AboutController::class, 'index']);
Route::get('/abouts/detail', [AboutController::class, 'index_detail']);

Route::get('/courses', [CorseController::class, 'index']);
Route::get('/events', [EventsController::class, 'index']);
Route::get('/events/detail', [EventsController::class, 'index_detail']);
Route::get('/event1', [Event1Controller::class, 'index']);
Route::get('/event1/detail1', [Event1Controller::class, 'index_detail1']);

Route::get('/event2', [Event1Controller::class, 'index_event2']);
Route::get('/event2/detail2', [Event1Controller::class, 'index_detail2']);

Route::get('/event3', [Event1Controller::class, 'index_event3']);
Route::get('/event3/detail3', [Event1Controller::class, 'index_detail3']);

Route::get('/event4', [Event1Controller::class, 'index_event4']);
Route::get('/event4/detail4', [Event1Controller::class, 'index_detail4']);

Route::get('/event5', [Event1Controller::class, 'index_event5']);
Route::get('/event5/detail5', [Event1Controller::class, 'index_detail5']);

Route::get('/event6', [Event1Controller::class, 'index_event6']);
Route::get('/event6/detail6', [Event1Controller::class, 'index_detail6']);


/***route pour la requettes des news*/
Route::prefix('/News')->group( function(){
Route::get('/', function(){
    return view('News.News');
});
Route::get('/{id}', [News1Controller::class, 'returnActualitebyid']);
Route::get('/detail/{id}', [News1Controller::class, 'returnDetailById']);


});



Route::get('/contact', [ContactController::class, 'index']);

Route::get('/galery', [GaleryController::class, 'index']);


Route::get('/course_singles', [CourseSingleController::class, 'index']);

//la route pour teachers
Route::get('/teachers', [TeachersController::class, 'index']);
Route::get('/teacherP', [TeacherPController::class, 'index']);
Route::get('/teacher1', [TeacherPController::class, 'index_1']);
Route::get('/teacher2', [TeacherPController::class, 'index_2']);
Route::get('/teacher3', [TeacherPController::class, 'index_3']);
Route::get('/teacher4', [TeacherPController::class, 'index_4']);
Route::get('/teacher5', [TeacherPController::class, 'index_5']);
Route::get('/teacher6', [TeacherPController::class, 'index_6']);
Route::get('/teacher7', [TeacherPController::class, 'index_7']);
Route::get('/teacher8', [TeacherPController::class, 'index_8']);
Route::get('/teacher9', [TeacherPController::class, 'index_9']);
Route::get('/teacher10', [TeacherPController::class, 'index_10']);
Route::get('/teacher11', [TeacherPController::class, 'index_11']);
Route::get('/teacher12', [TeacherPController::class, 'index_12']);
//galerie//
Route::get('/galery', [GaleryController::class, 'index']);

// course//
Route::get('/course_singles', [CourseSingleController::class, 'index']);

//contact//

Route::get('/contact', [ContactController::class, 'index']);

//route module inscrition frontend


Route::post('',[StudentreRegController::class,'userstore'])->name('add.user');
