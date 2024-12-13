<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Medications\Create;
use App\Livewire\Medications\Edit;
use App\Livewire\Medications\Index;
use App\Models\Medication;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/medications', Index::class)->name('medications.index');
    Route::get('/medications/create', Create::class)->name('medications.create');
    Route::get('/medications/edit/{medication}', Edit::class)->name('medications.edit');

    // Route::get('/students/edit/{student}', Medications\Edit::class)->name('students.edit');
    // Route::get('medications/edit/{medication}', Edit::class);

    // Route::get('/medications', Index::class)->name('medications.index');
});

require __DIR__.'/auth.php';
