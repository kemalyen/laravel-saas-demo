<?php

declare(strict_types=1);

use App\Livewire\Blog\CreatePost;
use App\Livewire\Blog\ListPosts;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomainOrSubdomain::class,
    PreventAccessFromCentralDomains::class,
    Stancl\Tenancy\Middleware\ScopeSessions::class,
])->group(function () {
 
    Route::livewire('/', 'home')->name('home');


    Route::middleware('guest')->group(function () {
        Route::livewire('/login', 'login')->name('tenant.login');
    });

    Route::prefix('/dashboard')->middleware(['auth'])->group(function () {
        Route::view('/', 'dashboard')->name('dashboard');
        Route::get('blog', ListPosts::class)->name('blog');
        Route::get('blog/create', CreatePost::class)->name('blog.create');
    });
});
