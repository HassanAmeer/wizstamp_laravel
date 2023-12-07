<?php

use App\Models\allStampDocsModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\allStampController;
use App\Http\Controllers\settingsController;


use App\Http\Controllers\wizUsersController;
use App\Http\Controllers\adminAuthController;
use App\Http\Controllers\api\wizUsersApiController;
use App\Http\Controllers\clients\HomePageController;

Route::get('/download-pdf/{filename}', function ($filename) {
    $path = storage_path('app/docs/' . $filename);

    // Check if the file exists
    if (!file_exists($path)) {
        abort(404);
    }

    // Return the file with the correct headers
    return Response::download($path, 'downloaded_file.pdf', ['Content-Type' => 'application/pdf']);
})->name('download.pdf');

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
//////////////////////////////////////////////////////////////////////////
// Route::get('/', function () {
//     return view('welcome');
// });
////////// for admin panel start
Route::post('/wizostamp/login', [adminAuthController::class, 'adminLoginF'])->name('loginpost');
Route::post('/wizostamp/editprofile', [adminAuthController::class, 'adminprofileUpdateF'])->name('editadminprofile');
Route::get('/wizostamp/adminprofile', [adminAuthController::class, 'adminprofileF'])->name('adminprofile');
Route::get('/wizostamp/home',  [adminAuthController::class, 'gotothomeF'] );
Route::get('/wizostamp/logout',  [adminAuthController::class, 'getLoginPageF'] );
Route::get('/wizostamp/login',  [adminAuthController::class, 'getLoginPageF'] );
Route::get('/wizostamp/stamps', [allStampController::class, 'getAllStampsF'])->name('vstamps');
Route::get('/wizostamp/veditstamps{id}', [allStampController::class, 'veditstampPageF'])->name('/wizostamp/veditstamps');
Route::get('/wizostamp/vusers', [wizUsersController::class, 'getWizUsersF'])->name('vusers');
Route::get('/wizostamp/dusers/{id}', [wizUsersController::class, 'deleteUsersF'])->name('/wizostamp/dusers');
Route::post('/wizostamp/edituser', [wizUsersController::class, 'editUserF'])->name('/wizostamp/edituser');
Route::get('/wizostamp/vedituserpage/{id}', [wizUsersController::class, 'veditUserPageF'])->name('/wizostamp/vedituserpage');
Route::get('/wizostamp/settings', [settingsController::class, 'vSettingsF'])->name('/wizostamp/settings');
////////// for admin panel end
////////// for admin panel end

///////////////////////////// for users home page start
Route::get('/', [HomePageController::class, 'gotohomepageF'])->name('/');
Route::get('/home', [HomePageController::class, 'gotohomepageF'])->name('/home');
Route::get('/login', [HomePageController::class, 'gotohomepageF'])->name('/login');
Route::post('/login', [HomePageController::class, 'userLoginF'])->name('/login');
Route::get('/logout', [HomePageController::class, 'userLogoutF'])->name('/logout');

Route::get('/docs/{filename}', [HomePageController::class, 'showPdf'])->name('show.pdf');
///////////////////////////// for users home page end


//////////////////////////////////////////////////////////////////////////
/////////// for clear cache 
Route::get('/clear/cache', function () {
    $run = Artisan::call('config:clear');
    $run = Artisan::call('cache:clear');
    $run = Artisan::call('config:cache');
    $run = Artisan::call('route:clear');

    // $run = Artisan::call('view:clear');
    return 'Cleard';
});
//////////////////////////////////////////////////////////////////////////