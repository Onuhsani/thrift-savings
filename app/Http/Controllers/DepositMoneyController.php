<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DepositMoneyController extends Controller
{
    public function deposit()
    {
        return view('deposit');
    }

    public function depositMoney(Request $request)
    {

        $request->validate([
            'deposit' => 'required|max:255',
        ]);
        $data = (int)$request->deposit;
        $username = Auth::user()->username;
        $record = User::where('username', $username)->first();
        $balance = (int)$record->balance;
        $withdrawable = (int)$record->withdrawable;
        if($balance == 0){
            User::where('username', $username)->update(['balance' => $balance + $data]);
            User::where('username', $username)->update(['withdrawable' => 0]);
            User::where('username', $username)->update(['charge' => $data]);

            return redirect()->back()->with('message', 'Top up made sucessfully');
        }else{
            User::where('username', $username)->update(['balance' => $balance + $data]);
            User::where('username', $username)->update(['withdrawable' => $withdrawable + $data]);
            
            return redirect()->back()->with('message', 'Top up made sucessfully');
        }
        

    }
}
