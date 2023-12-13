<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\UserDetail;
use App\Http\Controllers\Controller;


class SocialiteController extends Controller
{


    public function loginSocial(Request $request, string $provider): RedirectResponse
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callbackSocial(Request $request, string $provider)
    {
        $response = Socialite::driver($provider)->user();
        $user = User::whereEmail($response->getEmail())->first();
        if ($user) {
            $password = $user->password;
            $email_verified_at = $user->email_verified_at;
        } else {
            $password = '&o7V&ZnEzxqThX';
            $email_verified_at = now();
        }

        $user = User::updateOrCreate(
            ['email' => $response->getEmail()],
            [
                'name' => $response->getName() ?? $response->getNickname,
                'provider' => $provider,
                'provider_id' => $response->getId(),
                'token' => $response->token,
                'token_secret' => $response->tokenSecret,
                'avatar'  => $response->getAvatar(),
                'password' => $password,
                'email_verified_at' => $email_verified_at,
            ]
        );

        $details = UserDetail::firstOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'nickname' => User::generateUniqueNickname($response->getName() ?? $response->getNickname),
            ]
        );

        // if ($user->wasRecentlyCreated) {
        //     event(new Registered($user));
        // }

        Auth::login($user, remember: true);

        return redirect('/dashboard');
    }
}
