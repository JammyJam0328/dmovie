<?php

// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
})->name('home');
Route::get('/select-room-type', function (Request $request) {
    $hrs = $_GET['hrs'];
    return view('customer.select-room',[
        'hrs'=>$hrs
    ]);
})->name('select-room-type');
Route::get('/select-room', function (Request $request) {
    $hrs = $_GET['hrs'];
    $room_type = $_GET['room_type']; 
    $rooms = \App\Models\Room::where('type_id',$room_type)->where('status_id','2')->get();  
    return view('customer.room',[
        'hrs'=>$hrs,
        'room_type'=>$room_type,
        'rooms'=>$rooms
    ]);
})->name('select-room');
Route::get('/checkIn-information', function (Request $request) {
    $hrs = $_GET['hrs'];
    $room_type = $_GET['room_type'];
    $room_id = $_GET['room_id'];
    return view('customer.checkin-information',[
        'hrs'=>$hrs,
        'room_type'=>$room_type,
        'room_id'=>$room_id
    ]);
})->name('checkin-information');

Route::get('/qr-print', function (Request $request) {
    $id = $request->id;
    return view('customer.qr-print',[
        'id'=>$id
    
    ]);
})->name('qr');

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