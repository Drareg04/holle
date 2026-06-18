<?php

namespace App\Http\Controllers;

use App\Models\SocialAccount;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\MessageBag;

class LoginController extends Controller
{
    // SSO (Subpolygon/Google)
    public function providerRedirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function providerCallback(string $provider)
    {

        $oauthuser = Socialite::driver($provider)->user();

        // create or use socialite
        $social = SocialAccount::firstOrNew([
            'oauth_id' => $oauthuser->getId(),
            'provider' => $provider
        ]);

        if ($social->exists) {
            Auth::login($social->user);
            return redirect()->intended('/');
        }

        // create user
        $user = User::firstOrNew([
            'email' => $oauthuser->getEmail()
        ]);
        if ($user->exists) {
            $errors = new MessageBag();
            $errors->add('user_exists', 'User account already exists, try logging in with a different provider');
            return view("auth.login")->with("errors", $errors);
        } else {
            $user->name = $oauthuser->getName();
            // $user->password = bcrypt(str_random(30));
            $user->save();

            $social->user()->associate($user);
            $social->save();

            Auth::login($user);

            return redirect()->intended('/');
        }
    }


    // Email and password
    public function passwordLogin() {}



    public function passwordSignup() {}



    public function logout(Request $request)
    {
        Auth::logout();
        // auth()->guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
