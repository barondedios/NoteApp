<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;


Route::get('/', function() {
    return view('welcome');
});

Route::get('/my-notes', function() {
    return view('my-notes');
});

Route::get('/add-notes', function() {
    return view('add-notes');
});


Route::get('/my-profile', function() {
    return view('my-profile');
});

Route::get('/reminder', function() {
    return view('reminder');
});

Route::get('/task-tracker', function() {
    return view('task-tracker');
});

Route::get('/notes', [NoteController::class, 'showAllNotes'])->name('showAllNotes');

Route::get('/notes/create', [NoteController::class, 'createNote'])->name('createNote');

Route::post('/notes/store', [NoteController::class, 'storeNote'])->name('storeNote');
