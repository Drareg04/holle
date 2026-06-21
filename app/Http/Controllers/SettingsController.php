<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function account()
    {
        return view("settings.account");
    }

    public function seller()
    {
        return view("settings.seller");
    }
    public function sellerSubmit(Request $request)
    {
        $request->validate([
            'agree' => 'required',
        ]);
        $user = User::where("id", Auth::id())->first();
        $user->is_seller = 1;
        $user->save();
        return back();
    }
}
