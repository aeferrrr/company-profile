<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/anotherbiz', [PageController::class, 'anotherbiz'])->name('anotherbiz');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/organization', [PageController::class, 'organization'])
    ->name('organization');

Route::get('/services/construction', [ServiceController::class, 'construction'])->name('construction');
Route::get('/services/warehouse', [ServiceController::class, 'warehouse'])->name('warehouse');
Route::get('/services/piping', [ServiceController::class, 'piping'])->name('piping');
Route::get('/services/walling', [ServiceController::class, 'walling'])->name('walling');
Route::get('/services/epoxy', [ServiceController::class, 'epoxy'])->name('epoxy');
Route::get('/services/roofing', [ServiceController::class, 'roofing'])->name('roofing');
Route::get('/services/panel', [ServiceController::class, 'panel'])->name('panel');
Route::get('/services/road', [ServiceController::class, 'road'])->name('road');
Route::get('/services/landscape', [ServiceController::class, 'landscape'])->name('landscape');
Route::get('/services/interior', [ServiceController::class, 'interior'])->name('interior');
Route::get('/services/temporary', [ServiceController::class, 'temporary'])->name('temporary');
Route::get('/services/electrical', [ServiceController::class, 'electrical'])->name('electrical');
Route::get('/services/door', [ServiceController::class, 'door'])->name('door');

// Send Email
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');


// LANGUAGE
Route::get('/lang/{locale}', function ($locale) {
    // Tambahkan 'ko' ke dalam array
    if (! in_array($locale, ['en', 'id', 'ko'])) {
        abort(400);
    }

    session()->put('locale', $locale);
    // App::setLocale di sini hanya bertahan satu request, 
    // pastikan Anda punya Middleware untuk setLocale dari session secara global.

    return redirect()->back();
})->name('lang.switch');