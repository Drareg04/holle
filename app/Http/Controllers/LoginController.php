<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class LoginController extends Controller
{
    // Authentik (Subpolygon Account)
    public function authentikRedirect()
    {
        return Socialite::driver('authentik')->redirect();
    }

    public function authentikCallback()
    {

        $oauthuser = Socialite::driver('authentik')->user();

        $user = User::updateOrCreate([
            'oauth_id' => $oauthuser->id,
        ], [
            'name' => $oauthuser->name,
            'username' => $oauthuser->preferred_username,
            'email' => $oauthuser->email,
            'is_admin' => in_array("authentik Admins", $oauthuser->groups, true),
            'oauth_token' => $oauthuser->token,
            'oauth_refresh_token' => $oauthuser->refreshToken,
        ]);

        Auth::login($user, true);

        return redirect()->intended('/');
    }

    // Google
    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {

        $oauthuser = Socialite::driver('google')->user();

        $user = User::updateOrCreate([
            'oauth_id' => $oauthuser->id,
        ], [
            'name' => $oauthuser->name,
            'username' => $oauthuser->preferred_username,
            'email' => $oauthuser->email,
            'is_admin' => false,
            'oauth_token' => $oauthuser->token,
            'oauth_refresh_token' => $oauthuser->refreshToken,
        ]);

        Auth::login($user, true);

        return redirect()->intended('/');
    }

    // Email and password




    public function logout(Request $request)
    {
        // Auth::logout();
        auth()->guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
