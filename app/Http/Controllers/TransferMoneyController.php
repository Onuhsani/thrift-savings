<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class TransferMoneyController extends Controller
{
    public function transfer()
    {
        return view('transfer');
    }

    public function transferMoney(Request $request)
    {

        //dd();
        $request->validate([
            'transfer' => 'required|max:10',
            'username' =>'required|max:200'
        ]);
        $data = (int)$request->transfer;
        $beneficiary = $request->username;

        $users = User::where('username', $beneficiary)->first();

        $recipient = $users->username;
       
        $username = Auth::user()->username;
        $record = User::where('username', $username)->first();
        $balance = (int)$record->balance;

        if( ($recipient !== null) && ($balance > $data) ){
            $benrecord = $record = User::where('username', $beneficiary)->first();
            $benbalance = (int)$benrecord->balance;
            $benwithdrawable = (int)$benrecord->withdrawable;
    
            User::where('username', $beneficiary)->update(['balance' => $benbalance + $data]);
            User::where('username', $beneficiary)->update(['withdrawable' => $benwithdrawable + $data]);

            User::where('username', $username)->update(['balance' => $balance - $data]);

            return redirect()->back()->with('message', 'Transfer made successfully');

        }else{
            return redirect()->back()->with('message', 'User does not exist or insufficient funds');
        }

        return redirect()->back()->with('message', 'It didn\'t work!');
    }
}
