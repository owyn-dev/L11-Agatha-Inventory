<?php

use App\Livewire\Dashboard;
use App\Livewire\User\UserIndex;
use Illuminate\Support\Facades\Route;

// Route Dashboard
Route::get('/', Dashboard::class)->name('dashboard');

// Route Product

//Route User
Route::get('/user', UserIndex::class)->name('user.index');
