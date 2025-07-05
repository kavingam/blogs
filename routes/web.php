<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Employee\DashboardController as EmployeeDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\{
    JobsController,
    AdmitCardController,
    ResultController,
    NotesController,
    QuestionController,
    AnswerKeyController,
    SyllabusController,
    AdmissionController,
    NotificationController
};

// use App\Http\Controllers\User\DashboardController;

Route::get('/', function () { return view('home'); });
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/sitemap', [PageController::class, 'sitemap']);
Route::get('/service', [PageController::class, 'service']);

Route::get('/terms', [PageController::class, 'terms']);
Route::get('/privacy', [PageController::class, 'privacy']);
Route::get('/declaration', [PageController::class, 'declaration']);
// Route::get('/', [PageController::class, '']);

Route::post('/subscribe', function () { 
    return back()->with('success', 'Subscribed!'); 
})->name('subscribe');

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);


// User Routes
// Route::prefix('user')->middleware('auth')->group(function () {
//     Route::get('/dashboard', [UserDashboard::class, 'index'])->name('user.dashboard');
// });

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/dashboard', [UserDashboard::class, 'index'])->name('user.dashboard');
});

// Employee Routes
// Route::prefix('employee')->middleware('auth')->group(function () {
//     Route::get('/dashboard', [EmployeeDashboard::class, 'index'])->name('employee.dashboard');
// });

// // Admin Routes
// Route::prefix('admin')->middleware('auth')->group(function () {
//     Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
// });

Route::get('/latest-jobs', [JobsController::class, 'index'])->name('jobs.index');
Route::get('/admit-cards', [AdmitCardController::class, 'index'])->name('admitcards.index');
Route::get('/results', [ResultController::class, 'index'])->name('results.index');
Route::get('/notes', [NotesController::class, 'index'])->name('notes.index');
Route::get('/question-papers', [QuestionController::class, 'index'])->name('questions.index');
Route::get('/answer-keys', [AnswerKeyController::class, 'index'])->name('answers.index');
Route::get('/syllabus', [SyllabusController::class, 'index'])->name('syllabus.index');
Route::get('/admissions', [AdmissionController::class, 'index'])->name('admissions.index');
Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
