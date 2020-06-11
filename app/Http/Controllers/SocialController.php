<?php

namespace App\Http\Controllers;

use App\Social;
use App\User;
use Facebook\Facebook;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    protected $fb;
    public function __construct()
    {

    }

    public function redirect($service){

        return Socialite::driver('facebook')->redirect();
    }

    public function callback($provider = "facebook"){

        $providerUser = Socialite::driver($provider)->stateless()->user() ;
        $user = $this->createOrGetUser($provider, $providerUser);
        /*$user = User::updateOrCreate(
            [
                'email' => $auth_user->email
            ],
            [
                'token' => $auth_user->token,
                'name'  => $auth_user->name
            ]
        );*/
        Auth::login($user, true);

        return redirect()->to('/home');
    }

    public function  modal_create_post(){

        $pages = explode(".", Auth::user()->pages);
        $ids = explode(".", Auth::user()->ids);

        return view('socials.modal_create_post',compact('pages','ids'));
    }

    public function createOrGetUser($provider, $providerUser)
    {
        $account = Social::whereProvider($provider)
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => md5(rand(1,10000)),
                    'token' => $providerUser->token,
                ]);

            }
            $account = new Social([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}
