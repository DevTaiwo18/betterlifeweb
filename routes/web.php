<?php

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/tx', function () {
    return view('tx');
});


Route::get('/tv', function () {
    return view('tv');
});

Route::get('/Hanmodata', function () {
    return view('Hanmodata');
});

Route::get('/Admin', function () {
    return view('Admin');
});

Route::get('/ApiSetting', function () {
    return view('ApiSetting');
});

Route::get('/Reverse', function () {
    return view('Reverse');
});

Route::get('/RestPassword', function () {
    return view('RestPassword');
});

Route::get('/BroadCast', function () {
    return view('BroadCast');
});

Route::get('/Referral', function () {
    return view('Referral');
});


Route::prefix('user')->group(function () {
    Route::get('/', function () {
        return view('USER.HomePage');
    });

    Route::get('/Signup', function () {
        return view('USER.Signup');
    });

    Route::get('/Signin', function () {
        return view('USER.Signin');
    });

    Route::get('/Beriefy', function () {
        return view('USER.Beriefy');
    });

    Route::get('/ForgettenPassword', function () {
        return view('USER.ForgettenPassword');
    });

    Route::get('/Static', function () {
        return view('USER.Static');
    });

    Route::get('/Dashboard', function () {
        return view('USER.Dashboard');
    });

    Route::get('/FundWallet', function () {
        return view('USER.FundWallet');
    });

    Route::get('/AirtimeAndData', function () {
        return view('USER.AirtimeAndData');
    });

    Route::get('/AirtimeToCash', function () {
        return view('USER.AirtimeToCash');
    });

    Route::get('/BankUSSDs', function () {
        return view('USER.BankUSSDs');
    });

    Route::get('/BillPayment', function () {
        return view('USER.BillPayment');
    });

    Route::get('/Loan', function () {
        return view('USER.Loan');
    });

    Route::get('/PersonalInformation', function () {
        return view('USER.PersonalInformation');
    });

    Route::get('/Referral', function () {
        return view('USER.Referral');
    });

    Route::get('/UpdatePassword', function () {
        return view('USER.UpdatePassword');
    });

    Route::get('/ManagePin', function () {
        return view('USER.ManagePin');
    });
});
