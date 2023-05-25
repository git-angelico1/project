 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\InputNameController;
use App\Http\Controllers\YearVerificationController;
use App\Http\Controllers\Midterm;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DebtorsController;

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
    return view('welcome');})->name('welcome');


Route::get('/Dashboard', function () {
    return view('success');})->name('success');

 
Route::get('/Desales', function () {
    return "Desales";

});
Route::get('/gallery', function() {
    return view ('gallery');

});
Route::get('test', [test::class, 'test']);
Auth::routes ();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('companies',CompanyController::class);
Route::get('/login1', function() {
    return view ('login1');})->name('login');

//Route::post('view', [InputNameController::class, 'show']);
//Route::get('view', [InputNameController::class, 'show']);


//Route::get('trylogin',[App\Http\Controllers\YearVerificationController::class, 'yearcheck'])->middleware('check-year');


Route::get('/login1',[App\Http\Controllers\Midterm::class, 'mid1'])->name('login1');
Route::post('/login1',[App\Http\Controllers\Midterm::class, 'mid2'])->middleware('mid-term');

//Route::post('/login1', [Midterm::class, 'Login']);
//Route::get('/login1', [Midterm::class, 'Login']);

Route::resource('employees', EmployeeController::class);

Route::resource('debtors', DebtorsController::class);

Route::get('/dashboard', function () {
    return view('employees.index');
})->name('dashboard');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);