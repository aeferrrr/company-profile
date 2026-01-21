<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/organization', [PageController::class, 'organization'])
    ->name('organization');

Route::get('/services/construction', [ServiceController::class, 'construction'])->name('construction');
Route::get('/services/warehouse', [ServiceController::class, 'warehouse'])->name('warehouse');
Route::get('/services/piping', [ServiceController::class, 'piping'])->name('piping');
Route::get('/services/walling', [ServiceController::class, 'walling'])->name('walling');

// Send Email
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


// LANGUAGE
Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'id'])) {
        abort(400);
    }

    Session::put('locale', $locale);
    App::setLocale($locale);

    return redirect()->back();
})->name('lang.switch');
