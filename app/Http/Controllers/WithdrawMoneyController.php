<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class WithdrawMoneyController extends Controller
{
    public function withdraw()
    {
        return view('withdraw');
    }

    public function withdrawMoney(Request $request)
    {
        $request->validate([
            'withdraw' => 'required|max:255',
        ]);

        $data = (int)$request->withdraw;
        $username = Auth::user()->username;
        $record = User::where('username', $username)->first();
        $balance = (int)$record->balance;
        $charge = (int)$record->charge;

        if($balance >= ($data - $charge)){
            User::where('username', $username)->update(['balance' => $balance - $data]);
            User::where('username', $username)->update(['withdrawable' => 0]);
            $balance = (int)$record->balance;
            if($balance == 0){
                User::where('username', $username)->update(['withdrawable' => 0]);
                User::where('username', $username)->update(['charge' => 0]);

                return redirect()->back()->with('message', 'Withdrawal has been made sucessfully');
            }
                User::where('username', $username)->update(['withdrawable' => $balance - $data]);
                User::where('username', $username)->update(['charge' => $charge]);

                return redirect()->back()->with('message', 'Withdrawal has been made sucessfully');
            
        }else{

            return redirect()->back()->with('message', 'Sorry, insufficient funds');
        }

    }
}
