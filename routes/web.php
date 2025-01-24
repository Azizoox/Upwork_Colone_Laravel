<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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
Route::get('/home', function () {
    return view('home');
})->name('home');

route::get('/jobs',[JobController::class,'index'])->name('jobs.index');
route::get('/jobs/{id}',[JobController::class,'show'])->name('jobs.show');
route::post('/submit/{id}',[ProposalController::class,'store'])->middleware('auth','proposal');
route::get('/acceptProposal/{id}',[ProposalController::class,'accept'])->middleware('auth');
Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index');
Route::get('/conversation/{conversation}', [ConversationController::class, 'show'])->name('conversation.show');

Route::get('/confirmProposal/{proposal}', [ConversationController::class, 'confirm'])->name('confirm.proposal');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware(['guest'])
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware(['guest']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(['guest'])
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware(['guest']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware(['auth'])
    ->name('logout');
