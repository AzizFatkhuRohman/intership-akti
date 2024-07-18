<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\EvaluasiGanjilController;
use App\Http\Controllers\EvaluasiGenapController;
use App\Http\Controllers\LogbookMingguanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\NotifAdminController;
use App\Http\Controllers\NotifDepartementController;
use App\Http\Controllers\NotifMahasiswaController;
use App\Http\Controllers\NotifMentorController;
use App\Http\Controllers\NotifSectionController;
use App\Http\Controllers\PindahMentorController;
use App\Http\Controllers\PptController;
use App\Http\Controllers\ReportA3Controller;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\TriwulanGanjilController;
use App\Http\Controllers\TugasAkhirController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'login'])->name('login');
Route::post('/', [UserController::class, 'attempLogin']);
Route::get('lupa-password',[UserController::class,'lupaPassword']);
Route::post('lupa-password',[UserController::class,'putPassword']);

Route::middleware('auth')->group(function () {
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
    Route::post('absensi-search',[AbsensiController::class,'search']);
    Route::post('mingguan-search',[LogbookMingguanController::class,'search']);
    Route::post('triwulan-search',[TriwulanGanjilController::class,'search']);
    Route::post('pengguna-search',[UserController::class,'search']);
    Route::post('mentor-search',[MentorController::class,'search']);
    Route::post('mahasiswa-search',[MahasiswaController::class,'search']);
    Route::middleware('role:admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::resource('pengajuan-mentor',PindahMentorController::class);
            Route::get('dashboard', [Controller::class, 'admin']);
            Route::resource('notification',NotifAdminController::class);
            Route::prefix('manajemen')->group(function () {
                Route::resource('pengguna', UserController::class);
                Route::resource('mahasiswa', MahasiswaController::class);
                Route::resource('mentor', MentorController::class);
                Route::resource('section', SectionController::class);
                Route::resource('departement', DepartementController::class);
                Route::resource('dosen', DosenController::class);
            });
            Route::prefix('report')->group(function () {
                Route::resource('ppt', PptController::class);
                Route::resource('tugas-akhir', TugasAkhirController::class);
                Route::resource('report-a3', ReportA3Controller::class);
                Route::resource('sertifikat', SertifikatController::class);
            });
            Route::prefix('logbook')->group(function () {
                Route::resource('mingguan', LogbookMingguanController::class);
                Route::resource('bulanan-ganjil',EvaluasiGanjilController::class);
                Route::resource('bulanan-genap',EvaluasiGenapController::class);
                Route::resource('triwulan', TriwulanGanjilController::class);
                Route::post('triwulan/export',[TriwulanGanjilController::class,'export']);
                Route::post('mingguan/export',[LogbookMingguanController::class,'export']);
            });
        });
    });

    Route::middleware('role:departement')->group(function () {
        Route::prefix('departement')->group(function () {
            Route::get('dashboard', [Controller::class, 'departement']);
            Route::get('profil/{id}', [Controller::class, 'profil']);
            Route::put('profil/{id}', [Controller::class, 'profilDepartement']);
            Route::resource('notification',NotifDepartementController::class);
            Route::prefix('manajemen')->group(function () {
                Route::resource('mahasiswa', MahasiswaController::class);
                Route::resource('absensi', AbsensiController::class);
            });
            Route::prefix('logbook')->group(function () {
                Route::resource('mingguan', LogbookMingguanController::class);
                Route::resource('bulanan-ganjil',EvaluasiGanjilController::class);
                Route::resource('bulanan-genap',EvaluasiGenapController::class);
                Route::resource('triwulan', TriwulanGanjilController::class);
            });
            Route::prefix('report')->group(function () {
                Route::resource('ppt', PptController::class);
                Route::resource('tugas-akhir', TugasAkhirController::class);
                Route::resource('report-a3', ReportA3Controller::class);
                Route::resource('sertifikat', SertifikatController::class);
            });
        });
    });

    Route::middleware('role:section')->group(function () {
        Route::prefix('section')->group(function () {
            Route::get('dashboard', [Controller::class, 'section']);
            Route::get('profil/{id}', [Controller::class, 'profil']);
            Route::put('profil/{id}', [Controller::class, 'profilSection']);
            Route::resource('notification',NotifSectionController::class);
            Route::prefix('manajemen')->group(function () {
                Route::resource('mahasiswa', MahasiswaController::class);
                Route::resource('absensi', AbsensiController::class);
            });
            Route::prefix('logbook')->group(function () {
                Route::resource('mingguan', LogbookMingguanController::class);
                Route::resource('bulanan-ganjil',EvaluasiGanjilController::class);
                Route::resource('bulanan-genap',EvaluasiGenapController::class);
                Route::resource('triwulan', TriwulanGanjilController::class);
            });
            Route::prefix('report')->group(function () {
                Route::resource('ppt', PptController::class);
                Route::resource('tugas-akhir', TugasAkhirController::class);
                Route::resource('report-a3', ReportA3Controller::class);
                Route::resource('sertifikat', SertifikatController::class);
            });
        });
    });

    Route::middleware('role:mentor')->group(function () {
        Route::prefix('mentor')->group(function () {
            Route::get('dashboard', [Controller::class, 'mentor']);
            Route::get('profil/{id}', [Controller::class, 'profil']);
            Route::put('profil/{id}', [Controller::class, 'profilMentor']);
            Route::resource('notification',NotifMentorController::class);
            Route::resource('data',MentorController::class);
            Route::prefix('manajemen')->group(function () {
                Route::resource('mahasiswa', MahasiswaController::class);
                Route::resource('absensi', AbsensiController::class);
            });
            Route::prefix('report')->group(function () {
                Route::resource('ppt', PptController::class);
                Route::resource('tugas-akhir', TugasAkhirController::class);
                Route::resource('report-a3', ReportA3Controller::class);
                Route::resource('sertifikat', SertifikatController::class);
            });
            Route::prefix('logbook')->group(function () {
                Route::resource('mingguan', LogbookMingguanController::class);
                Route::resource('bulanan-ganjil',EvaluasiGanjilController::class);
                Route::resource('bulanan-genap',EvaluasiGenapController::class);
                Route::resource('triwulan', TriwulanGanjilController::class);
            });
        });
    });

    Route::middleware('role:mahasiswa')->group(function () {
        Route::prefix('mahasiswa')->group(function () {
            Route::get('dashboard', [Controller::class, 'mahasiswa']);
            Route::get('profil/{id}', [Controller::class, 'profil']);
            Route::put('profil/{id}', [Controller::class, 'profilMahasiswa']);
            Route::post('profil-add', [Controller::class, 'postProfil']);
            Route::resource('notification',NotifMahasiswaController::class);
            Route::resource('mentor', MentorController::class);
            Route::resource('absensi', AbsensiController::class);
            Route::resource('data', MahasiswaController::class);
            Route::prefix('logbook')->group(function () {
                Route::resource('mingguan', LogbookMingguanController::class);
                Route::resource('bulanan-ganjil',EvaluasiGanjilController::class);
                Route::resource('bulanan-genap',EvaluasiGenapController::class);
                Route::resource('triwulan', TriwulanGanjilController::class);
            });
            Route::prefix('report')->group(function () {
                Route::resource('ppt', PptController::class);
                Route::resource('tugas-akhir', TugasAkhirController::class);
                Route::resource('report-a3', ReportA3Controller::class);
                Route::resource('sertifikat', SertifikatController::class);
            });
            Route::prefix('manajemen')->group(function () {
                Route::resource('pengguna', UserController::class);
                Route::resource('mentor', MentorController::class);
                Route::resource('section', SectionController::class);
                Route::resource('departement', DepartementController::class);
                Route::resource('dosen', DosenController::class);
                Route::resource('pindah-mentor', PindahMentorController::class);
            });
        });
    });

    Route::middleware('role:dosen')->group(function () {
        Route::prefix('dosen')->group(function () {
            Route::get('dashboard', [Controller::class, 'dosen']);
            Route::resource('notification',NotifAdminController::class);
            Route::prefix('manajemen')->group(function () {
                Route::resource('mahasiswa', MahasiswaController::class);
                Route::resource('absensi', AbsensiController::class);
            });
            Route::prefix('logbook')->group(function () {
                Route::resource('mingguan', LogbookMingguanController::class);
                Route::resource('triwulan', TriwulanGanjilController::class);
            });
            Route::prefix('report')->group(function () {
                Route::resource('ppt', PptController::class);
                Route::resource('tugas-akhir', TugasAkhirController::class);
                Route::resource('report-a3', ReportA3Controller::class);
                Route::resource('sertifikat', SertifikatController::class);
            });
        });
    });
});
