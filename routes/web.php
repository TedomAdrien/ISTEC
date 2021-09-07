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

Route::get('/formations', [FormationController::class, 'index']);

// route pour la requettes des cycles bts et hnd
Route::get('/formations/cycle_bts', [CycleController::class, 'index_bts']);
Route::get('/formations/cycle_licence', [CycleController::class, 'index_licence']);
Route::get('/formations/cycle_master', [CycleController::class, 'index_master']);
Route::get('/formations/cycle_expertise', [CycleController::class, 'index_expertise']);
Route::get('/formations/cycle_bts/cge', function () {
    return view('formation.filiere.cge');
});
Route::get('/formations/cycle_bts/glt', function () {
    return view('formation.filiere.glt');
});
Route::get('/formations/cycle_bts/gsi', function () {
    return view('formation.filiere.gsi');
});
Route::get('/formations/cycle_bts/com_ets', function () {
    return view('formation.filiere.com_ets');
});
Route::get('/formations/cycle_bts/mcv', function () {
    return view('formation.filiere.mcv');
});
Route::get('/formations/cycle_bts/ama', function () {
    return view('formation.filiere.ama');
});
Route::get('/formations/cycle_licence/dt', function () {
    return view('formation.filiere.dt');
});
Route::get('/formations/cycle_licence/gq', function () {
    return view('formation.filiere.gq');
});
Route::get('/formations/cycle_licence/tl', function () {
    return view('formation.filiere.tl');
});
Route::get('/formations/cycle_licence/ba', function () {
    return view('formation.filiere.ba');
});


Route::get('/formations/cycle_licence/cp', function () {
    return view('formation.filiere.cp');
});
Route::get('/formations/cycle_licence/mmo', function () {
    return view('formation.filiere.mmo');
});
Route::get('/formations/cycle_licence/grh', function () {
    return view('formation.filiere.grh');
});
Route::get('/formations/cycle_licence/cca', function () {
    return view('formation.filiere.cca');
});
Route::get('/formations/cycle_licence/bcgc', function () {
    return view('formation.filiere.bcgc');
});
Route::get('/formations/cycle_licence/moci', function () {
    return view('formation.filiere.moci');
});
Route::get('/formations/cycle_licence/gl', function () {
    return view('formation.filiere.gl');
});
Route::get('/formations/cycle_licence/rt', function () {
    return view('formation.filiere.rt');
});
Route::get('/formations/cycle_licence/asr', function () {
    return view('formation.filiere.asr');
});
Route::get('/formations/cycle_licence/irm', function () {
    return view('formation.filiere.irm');
});

Route::get('/formations/cycle_licence/dt', function () {
    return view('formation.filiere.dt');
});
Route::get('/formations/cycle_licence/gq', function () {
    return view('formation.filiere.gq');
});
Route::get('/formations/cycle_licence/tl', function () {
    return view('formation.filiere.tl');
});
Route::get('/formations/cycle_licence/ba', function () {
    return view('formation.filiere.ba');
});
Route::get('/formations/cycle_licence/mcv3', function () {
    return view('formation.filiere.mcv3');
});
Route::get('/formations/cycle_licence/grh3', function () {
    return view('formation.filiere.grh3');
});





Route::get('/formations/cycle_bts/bnk_fin', function () {
    return view('formation.filiere.bnk_fin');
});
Route::get('/formations/cycle_bts/mic_fin', function () {
    return view('formation.filiere.mic_fin');
});
Route::get('/formations/cycle_bts/grh', function () {
    return view('formation.filiere.grh');
});
Route::get('/formations/cycle_bts/ges_qual', function () {
    return view('formation.filiere.ges_qual');
});
Route::get('/formations/cycle_bts/com_int', function () {
    return view('formation.filiere.com_int');
});
Route::get('/formations/cycle_bts/assur', function () {
    return view('formation.filiere.assur');
});
Route::get('/formations/cycle_bts/bat', function () {
    return view('formation.filiere.bat');
});
Route::get('/formations/cycle_bts/topo', function () {
    return view('formation.filiere.topo');
});
Route::get('/formations/cycle_bts/chaudro', function () {
    return view('formation.filiere.chaudro');
});
Route::get('/formations/cycle_bts/genie_log', function () {
    return view('formation.filiere.genie_log');
});
Route::get('/formations/cycle_bts/froid_clim', function () {
    return view('formation.filiere.froid_clim');
});
Route::get('/formations/cycle_bts/iia', function () {
    return view('formation.filiere.iia');
});
Route::get('/formations/cycle_bts/info_ges', function () {
    return view('formation.filiere.info_ges');
});
Route::get('/formations/cycle_bts/elec', function () {
    return view('formation.filiere.elec');
});
Route::get('/formations/cycle_bts/reso_tel', function () {
    return view('formation.filiere.reso_tel');
});
Route::get('/formations/cycle_bts/reso_secu', function () {
    return view('formation.filiere.reso_secu');
});
Route::get('/formations/cycle_bts/maint_syst_info', function () {
    return view('formation.filiere.maint_syst_info');
});
Route::get('/formations/cycle_bts/expertiseComptable', function () {
    return view('formation.filiere.expertiseComptable');
});
Route::get('/formations/cycle_bts/software-engineering', function () {
    return view('formation.filiere.softwareengineering');
});
Route::get('/formations/cycle_bts/telecommunication', function () {
    return view('formation.filiere.telecommunication');
});
Route::get('/formations/cycle_bts/network-and-security', function () {
    return view('formation.filiere.networkandsecurity');
});
Route::get('/formations/cycle_bts/marketing-trade-and-sales', function () {
    return view('formation.filiere.marketingtradeandsales');
});
Route::get('/formations/cycle_bts/logistics-and-transport-management', function () {
    return view('formation.filiere.logisticsandtransportmanagement');
});
Route::get('/formations/cycle_bts/international-trade', function () {
    return view('formation.filiere.internationaltrade');
});
Route::get('/formations/cycle_bts/hardware-maintenance', function () {
    return view('formation.filiere.hardwaremaintenance');
});
Route::get('/formations/cycle_bts/banking-and-finance', function () {
    return view('formation.filiere.bankingandfinance');
});
Route::get('/formations/cycle_bts/human-resource-management', function () {
    return view('formation.filiere.humanresourcemanagement');
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
Route::get('/News', [NewsController::class, 'index']);
Route::get('/News/detail/detaill', [NewsController::class, 'index_detail']);

Route::get('/news1', [News1Controller::class, 'index_news1']);
Route::get('/News/detail/detaill1', [News1Controller::class, 'index_detail1']);

Route::get('/news2', [News1Controller::class, 'index_news2']);
Route::get('/News/detail/detaill2', [News1Controller::class, 'index_detail2']);

Route::get('/news3', [News1Controller::class, 'index_news3']);
Route::get('/News/detail/detaill3', [News1Controller::class, 'index_detail3']);

Route::get('/news4', [News1Controller::class, 'index_news4']);
Route::get('/News/detail/detaill4', [News1Controller::class, 'index_detail4']);

Route::get('/news5', [News1Controller::class, 'index_news5']);
Route::get('/News/detail/detaill5', [News1Controller::class, 'index_detail5']);

Route::get('/news6', [News1Controller::class, 'index_news6']);
Route::get('/News/detail/detaill6', [News1Controller::class, 'index_detail6']);

Route::get('/news7', [News1Controller::class, 'index_news7']);
Route::get('/News/detail/detaill7', [News1Controller::class, 'index_detail7']);

Route::get('/news8', [News1Controller::class, 'index_news8']);
Route::get('/News/detail/detaill8', [News1Controller::class, 'index_detail8']);


Route::get('/news9', [News1Controller::class, 'index_news9']);
Route::get('/News/detail/detaill9', [News1Controller::class, 'index_detail9']);




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

Route::post('',[StudentreRegController::class,'userstore'])->name('add.student');

Route::post('',[StudentreRegController::class,'userstore'])->name('add.user');

