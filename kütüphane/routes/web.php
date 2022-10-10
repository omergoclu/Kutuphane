<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserProfilComponent;
use App\Http\Livewire\User\UserEditProfilComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;
use App\Http\Livewire\Admin\AdminKategoriComponent;
use App\Http\Livewire\Admin\AdminAddKategoriComponent;
use App\Http\Livewire\Admin\AdminEditKategoriComponent;
use App\Http\Livewire\Admin\AdminKitaplarComponent;
use App\Http\Livewire\Admin\AdminAddKitaplarComponent;
use App\Http\Livewire\Admin\AdminEditKitaplarComponent;
use App\Http\Livewire\Admin\AdminYazarlarComponent;
use App\Http\Livewire\Admin\AdminAddYazarlarComponent;
use App\Http\Livewire\Admin\AdminEditYazarlarComponent;
use App\Http\Livewire\Admin\AdminKiralananKitaplarComponent;
use App\Http\Livewire\Admin\AdminOncedenKiralanmisKitaplarComponent;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);

Route::get('/kitaplar',ShopComponent::class);

Route::get('/kitaplar/{Url}',DetailsComponent::class)->name('kitaplar.details');

Route::get('/search',SearchComponent::class)->name('kitaplar.search');


//User
Route::prefix('user')->middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/profil',UserProfilComponent::class)->name('user.profil');
    Route::get('/profil/edit',UserEditProfilComponent::class)->name('user.editprofil');
    Route::get('/change-password',UserChangePasswordComponent::class)->name('user.changepassword');
});

//Admin
Route::prefix('admin')->middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/kategoris',AdminKategoriComponent::class)->name('admin.kategoris');
    Route::get('/addKategori',AdminAddKategoriComponent::class)->name('admin.addkategori');
    Route::get('/kategori/edit/{kategori_id}',AdminEditKategoriComponent::class)->name('admin.editkategori');
    Route::get('/kitaplars',AdminKitaplarComponent::class)->name('admin.kitaplars');
    Route::get('/addKitap',AdminAddKitaplarComponent::class)->name('admin.addkitaplar');
    Route::get('/kitaplar/edit/{kitap_id}',AdminEditKitaplarComponent::class)->name('admin.editkitaplar');
    Route::get('/yazarlars',AdminYazarlarComponent::class)->name('admin.yazarlars');
    Route::get('/addYazar',AdminAddYazarlarComponent::class)->name('admin.addyazarlar');
    Route::get('/yazarlar/edit/{yazar_id}',AdminEditYazarlarComponent::class)->name('admin.edityazarlar');
    Route::get('/kiralananKitaplar',AdminKiralananKitaplarComponent::class)->name('admin.kiralananKitaplar');
    Route::get('/oncedenkiralananKitaplar',AdminOncedenKiralanmisKitaplarComponent::class)->name('admin.oncedenkiralananKitaplar');
});


