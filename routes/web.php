<?php

use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TunjanganController;
use App\Models\Screen;
use App\Models\Screengroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('/pengajuan')->controller(PengajuanController::class)->group(function () {
        Route::get('/approval_pengajuan', 'approval');
        Route::get('/list_pengajuan', 'list');
    });

    Route::prefix('/tunjangan')->controller(TunjanganController::class)->group(function () {
        Route::get('/buat_tunjangan', 'buat');
        Route::get('/bukti_tunjangan', 'bukti');
        Route::get('/list_tunjangan', 'list');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/pengajuan/approval_pengajuan', function () {
//     return view('pengajuan.approval_pengajuan');
// })->middleware(['auth', 'verified'])->name('approval_pengajuan');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
