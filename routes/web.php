<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('/salaam', function () {
    return view('auth.login');
});
Route::resource('/success-story', \App\Http\Controllers\StoryController::class,['as' => 'story']);
Route::get('/sejarah', [\App\Http\Controllers\FsambutanController::class, 'sejarah']);
Route::get('/', [\App\Http\Controllers\HomeController::class,'index']) ->name('home');
Route::resource('/post', \App\Http\Controllers\FpostController::class,['as' => 'post']);
Route::resource('/agenda', \App\Http\Controllers\FagendaController::class,['as' => 'agenda']);
Route::resource('/formdaftar', \App\Http\Controllers\DaftarController::class,['as' => 'front']);
Route::resource('/contact', \App\Http\Controllers\FcontactController::class,['as' => 'front']);
Route::get('/prestasi', [\App\Http\Controllers\FprestasiController::class,'index']) ->name('prestasi');
Route::get('/fasilitas', [\App\Http\Controllers\FfacilityController::class,'index']) ->name('fasilitas');
Route::get('/testimony', [\App\Http\Controllers\FtestimonyController::class,'index']) ->name('testimony');

Route::get('/sambutan', [\App\Http\Controllers\FsambutanController::class,'index'])->name('sambutan');
Route::get('/tentang-kami',[\App\Http\Controllers\AboutController::class,'tentangkami'])->name('tentang-kami');
Route::get('/akreditasi', function () {return view('front.pages.akreditasi');})->name('akreditasi');
Route::get('/karir', function () {return view('front.pages.karir');})->name('karir');
Route::get('/impact', function () {return view('front.pages.primary-school');})->name('primary-school');

// Route::get('/preschool-life', function () {return view('front.pages.preschool-life');})->name('preschool-life');
// Route::get('/preschool-calendar', function () {return view('front.pages.preschool-calendar');})->name('preschool-calendar');
// Route::get('/preschool', function () {return view('front.pages.preschool');})->name('preschool');
// Route::get('/primary-school', function () {return view('front.pages.primary-school');})->name('primary-school');
// Route::get('/primary-school-life', function () {return view('front.pages.primary-school-life');})->name('primary-school-life');
// Route::get('/primary-school-calendar', function () {return view('front.pages.primary-school-calendar');})->name('primary-school-calendar');
// Route::get('/primary-school-curriculum', function () {return view('front.pages.primary-school-curriculum');})->name('primary-school-curriculumphp');
// Route::get('/secondary-school', function () {return view('front.pages.secondary-school');})->name('secondary-school');
// Route::get('/secondary-school-curriculum', function () {return view('front.pages.secondary-school-curriculum');})->name('secondary-school-curriculum');
// Route::get('/secondary-school-life', function () {return view('front.pages.secondary-school-life');})->name('secondary-school-life');
// Route::get('/secondary-school-calendar', function () {return view('front.pages.secondary-school-calendar');})->name('secondary-school-calendar');
// Route::get('/pesantren', function () {return view('front.pages.pesantren');})->name('pesantren');
// Route::get('/tahfidz', function () {return view('front.pages.tahfidz');})->name('tahfidz');

Route::get('/pendaftaran', [\App\Http\Controllers\FpendaftaranController::class,'index']) ->name('pendaftaran');
Route::get('/prosedur', function () {return view('front.pages.prosedur');})->name('prosedur');
Route::get('/investasi', function () {return view('front.pages.investasi');})->name('investasi');
Route::get('/tanggal-penting', function () {return view('front.pages.tanggal-penting');})->name('tanggal-penting');
Route::get('/beasiswa', function () {return view('front.pages.beasiswa');})->name('beasiswa');
Route::get('/faq', function () {return view('front.pages.faq');})->name('faq');

// mobile
Route::get('/profil', function () {return view('front.mobile.profile');})->name('profil');
Route::get('/program', function () {return view('front.mobile.program');})->name('program');
Route::get('/daftar', function () {return view('front.mobile.daftar');})->name('daftar');



/**
 * route for admin
 */

//group route with prefix "admin"
Route::prefix('admin')->group(function () {

    //group route with middleware "auth"
    Route::group(['middleware' => 'auth'], function() {

        //route dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
        
        //route resource slider
        Route::resource('/slider', SliderController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);

        //route resource alasan
        Route::resource('/unggulan', UnggulanController::class,['as' => 'admin']);

        //route resource agenda
        Route::resource('/agenda', AgendaController::class,['as' => 'admin']);

        //route resource categories
        Route::resource('/category', CategoryController::class,['as' => 'admin']);

        //route resource post
        Route::resource('/post', PostController::class, ['as' => 'admin']);

        //route resource Testimony
        Route::resource('/testimony', TestimonyController::class, ['as' => 'admin']);

        //route resource categoriprestasi
        Route::resource('/categoriprestasi', CategoriprestasiController::class,['as' => 'admin']);

        //route resource prestasi
        Route::resource('/prestasi', PrestasiController::class, ['as' => 'admin']);

        //route resource Facility
        Route::resource('/facility', FacilityController::class, ['as' => 'admin']);

        //route resource Form Daftar
        Route::resource('/daftarform', DaftarController::class, ['as' => 'admin']);

    
        //route resource Form Daftar
        Route::resource('/contact', ContactController::class, ['as' => 'admin']);

        //route profile
        Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
        
        //route about
        Route::resource('/about', AboutController::class,['as' => 'admin']);

        //route visi
        Route::resource('/visi', VisiController::class, ['as' => 'admin']);

        //route misi
        Route::resource('/misi', MisiController::class, ['as' => 'admin']);

        //route motto
        Route::resource('/motto', MottoController::class, ['as' => 'admin']);

        //route resource Metodology
        Route::resource('/metodology', MetodologyController::class, ['as' => 'admin']);

        //route resource story
        Route::resource('/story', StoryController::class, ['as' => 'admin']);

        //route resource inisiatif
        Route::resource('/inisiatif', InisiatifController::class, ['as' => 'admin']);

        //route resource svg
        Route::resource('/svg', SvgController::class, ['as' => 'admin']);

        //route resource program
        Route::resource('program', ProgramController::class, ['as' => 'admin']);

        //route resource identity
        Route::get('/identity', [IdentityController::class, 'index'])->name('admin.identity.index');
        Route::post('/identity/update', [IdentityController::class, 'index']);
        Route::put('/identity/update/{identity}', [IdentityController::class, 'update'])->name('admin.identity.update');

        /* Information Schema Route
            Route::{method(post|get|put|delete)}('route_in_url/{params (menyesuaikan dengan yang di controller params)}', [
                ClassNameController::class,
                'name_of_function into class'
            ])->collection another for route (name|guard|middleware)
        */

        Route::get('/logo', [LogoController::class, 'index'])->name('admin.logo.index');
        Route::post('/logo/update', [LogoController::class, 'index']);
        Route::put('/logo/update/{id}', [LogoController::class, 'update'])->name('admin.logo.update');
        Route::delete('/logo/update', [LogoController::class, 'index']);
        // Route::resource('/logo', LogoController::class, ['as' => 'admin']);

    });
});