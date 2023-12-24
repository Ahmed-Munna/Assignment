<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [HomeController::class, 'showDropdown'])->name('index');
Route::post('/bus-view', [HomeController::class, 'busView'])->name('bus_view');
Route::post('/buy_now', [HomeController::class, 'processPurchase'])->name('buy_now');
Route::post('/dashboard', [HomeController::class, 'processPurchase_Final'])->name('checkoutFinal');
//Show Notice 
Route::get('/bus-view', function () {
    return view('notice');
})->name('bus_view_Notice');

Route::get('/dashboard',[HomeController::class, 'user_type_check'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
