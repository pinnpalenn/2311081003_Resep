<?php

use App\Http\Controllers\ResepController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('resep.index');
});

Route::resource('resep', ResepController::class);

// Route untuk resep yang dihapus
Route::get('/resep-trashed', [ResepController::class, 'trashed'])->name('resep.trashed');
Route::get('/resep-restore/{id}', [ResepController::class, 'restore'])->name('resep.restore');
Route::delete('/resep-force-delete/{id}', [ResepController::class, 'forceDelete'])->name('resep.force-delete');
