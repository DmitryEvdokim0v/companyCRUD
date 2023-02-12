<?php

use App\Models\Company;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GoodsController;
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





Route::name('user.')->group(function(){
    Route::get('/', function () {
        $company = Company::all();
        return view ('company.index')->with('company', $company);
    })->middleware('auth');
    
    Route::resource('/company', CompanyController::class)->middleware('auth');
    Route::resource('/goods', GoodsController::class)->middleware('auth');

    Route::get('/login', function(){

        if(Auth::check()){
            $company = Company::all();
            return view ('company.index')->with('company', $company);
        }
        return view('login');
    })->name('login');

    Route::post('/login', [App\http\Controllers\LoginController::class, 'login']);
    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration', function(){
        if(Auth::check()){
            return redirect(route('user.company'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [App\http\Controllers\RegisterController::class, 'save']);
});