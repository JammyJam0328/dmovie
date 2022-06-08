<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        switch (auth()->user()->role->id) {
            case '1':
            echo '<h1>Admin</h1>';
            break;
            case '2':
            return redirect()->route('fd.dashboard');
            break;  
            case '3':
            echo '<h1>Housekeeping</h1>';
            break;
            case '4':
            echo '<h1>Kitchen</h1>';
            break;
        }
    })->name('dashboard');
});

Route::prefix('fd')->middleware([
    'auth:sanctum',
    'frontdesk',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
       return view('frontdesk.pages.main');
    })->name('fd.dashboard');
    Route::get('/checkin', function () {
        return view('frontdesk.pages.checkin.main');
    })->name('fd.checkin');
    Route::get('/inhouse', function () {
        return view('frontdesk.pages.inhouse.main');
    })->name('fd.inhouse');

    Route::get('/rooms', function () {
        return view('frontdesk.pages.rooms.main');
    })->name('fd.rooms');
});