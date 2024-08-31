<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Hash;

// (START) FOR LANDING AND LOG IN PAGE ---------------------------------------------------------->
Route::get('/landing', function () {
    return view('landing');
})->name('landing');

Route::get('/user', function () {
    return view('user');
})->name('user');



Route::get('login/adviser', function () {
    return view('login/adviser');
})->name('login.adviser');

Route::get('login/parent', function () {
    return view('login.parent');
})->name('login.parent');

// (END) FOR LANDING ,SELECT USER AND LOG IN PAGE ---------------------------------------------------------->

// Show the login form
//Route::get('login/admin', [LoginController::class, 'showLoginForm'])->name('login.admin');

// Handle login attempts

// Handle logout
Route::post('logout', [loginController::class, 'logout'])->name('logout');

// Route for handling login requests
// Route::post('login/admin', [LoginController::class, 'adminLogin'])->name('login.admin.submit');

//use App\Http\Controllers\AcadChairpersonController; // <-- Import the controller

//Route::get('/acad-chairpersons', [AcadChairpersonController::class, 'yourMethod']);

//Route::get('/generate-hash', function () { $hashedPassword = Hash::make('123'); return $hashedPassword;});


// (START) FOR RESET PASSWORD  ---------------------------------------------------------->
Route::get('reset/reset', function () {
    return view('reset.reset');
})->name('reset.reset');

// (END) FOR RESET PASSWORD  ---------------------------------------------------------->


Route::get('login/admin', function () {
    return view('login.admin');
})->name('login.admin');


Route::post('login/admin', [loginController::class, 'adminLogin'])->name('login.admin.submit');

// (START) FOR ADMIN PAGE ONLY ---------------------------------------------------------->
Route::middleware(AdminMiddleware::class)->group(function () {

    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

});

Route::get('/admin/logout', [AdminController::class, 'logout']);


Route::get('/admin/student', function () {
    return view('admin.student');
})->name('admin.student');

Route::get('/admin/teacher', function () {
    return view('admin.teacher');
})->name('admin.teacher');

Route::get('/admin/section', function () {
    return view('admin.section');
})->name('admin.section');

Route::get('/admin/subject', function () {
    return view('admin.subject');
})->name('admin.subject');

Route::get('/admin/parent', function () {
    return view('admin.parent');
})->name('admin.parent');

Route::get('/admin/record', function () {
    return view('admin.record');
})->name('admin.record');

Route::get('/admin/profile', function () {
    return view('admin.profile');
})->name('admin.profile');

// (END) FOR ADMIN PAGE ONLY ---------------------------------------------------------->




// (START) FOR ADVISER PAGE ONLY ---------------------------------------------------------->
Route::get('/adviser/dashboard', function () {
    return view('adviser.dashboard');
})->name('adviser.dashboard');

Route::get('/adviser/advisory', function () {
    return view('adviser.advisory');
})->name('adviser.advisory');

Route::get('/adviser/archive', function () {
    return view('adviser.archive');
})->name('adviser.archive');

Route::get('/adviser/profile', function () {
    return view('adviser.profile');
})->name('adviser.profile');

// (END) FOR ADVISER PAGE ONLY ---------------------------------------------------------->




// (START) FOR PARENT PAGE ONLY ---------------------------------------------------------->
Route::get('/parent/dashboard', function () {
    return view('parent.dashboard');
})->name('parent.dashboard');

Route::get('/parent/grade', function () {
    return view('parent.grade');
})->name('parent.grade');

Route::get('/parent/profile', function () {
    return view('parent.profile');
})->name('parent.profile');


// (END) FOR PARENT PAGE ONLY ---------------------------------------------------------->
