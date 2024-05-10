<?php

use App\Http\Middleware\AuthAdmin;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\PlaceComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\ProvinceComponent;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\AdminPlaceComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAddPlaceComponent;
use App\Http\Livewire\Admin\AdminProvinceComponent;
use App\Http\Livewire\Admin\AdminAddProvinceComponent;
use App\Http\Livewire\Admin\AdminEditPlaceComponent;
use App\Http\Livewire\Admin\AdminEditProvinceComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});
Route::middleware(['auth', '\App\Http\Middleware\AuthAdmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/province', AdminProvinceComponent::class)->name('admin.province');
    Route::get('/admin/province/add', AdminAddProvinceComponent::class)->name('admin.province.add');
    Route::get('/admin/province/edit/{province_id}', AdminEditProvinceComponent::class)->name('admin.province.edit');
    Route::get('/admin/province/delete/{province_id}', AdminProvinceComponent::class)->name('admin.province.delete');
    Route::get('/admin/place', AdminPlaceComponent::class)->name('admin.place');
    Route::get('/admin/place/add', AdminAddPlaceComponent::class)->name('admin.place.add');
    Route::get('/admin/place/edit/{place_id}', AdminEditPlaceComponent::class)->name('admin.place.edit');
    Route::get('/admin/place/delete/{place_id}', AdminPlaceComponent::class)->name('admin.place.delete');

});

Route::get('/', HomeComponent::class)->name('home.index');
Route::get('/place', PlaceComponent::class)->name('place');
Route::get('/place/{slug}', DetailsComponent::class)->name('place.details');
Route::get('/place-province/{slug}', ProvinceComponent::class)->name('place.province');
Route::get('/search', SearchComponent::class)->name('product.search');
require __DIR__ . '/auth.php';


