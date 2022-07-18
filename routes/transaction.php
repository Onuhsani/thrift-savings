<?php


use App\Http\Controllers\DepositMoneyController;
use App\Http\Controllers\WithdrawMoneyController;
use App\Http\Controllers\TransferMoneyController;
use Illuminate\Support\Facades\Route;


//Route::middleware('transaction')->group(function () {

    Route::get('/deposit', [DepositMoneyController::class, 'deposit'])->name('deposit');
    Route::post('/deposit', [DepositMoneyController::class, 'depositMoney']);
    Route::get('/withdraw', [WithdrawMoneyController::class, 'withdraw'])->name('withdraw');
    Route::post('/withdraw', [WithdrawMoneyController::class, 'withdrawMoney']);
    Route::get('/transfer', [TransferMoneyController::class, 'transfer'])->name('transfer');
    Route::post('/transfer', [TransferMoneyController::class, 'transferMoney']);

    
//});



?>