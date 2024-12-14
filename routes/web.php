<?php

use App\Livewire\Dashboard;
use App\Livewire\User\UserEdit;
use App\Livewire\User\UserIndex;
use App\Livewire\User\UserCreate;
use Illuminate\Support\Facades\Route;

// Route Dashboard
Route::get('/', Dashboard::class)->name('dashboard');

// Route Product

//Route User
Route::get('/user', UserIndex::class)->name('user.index');
Route::get('/user/create', UserCreate::class)->name('user.create');
Route::get('/user/{user}/edit', UserEdit::class)->name('user.edit');
