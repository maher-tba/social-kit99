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
    //make request to Facebook or twitter or etc "$service" to get user data
    // initialize Socialite with default value
    public function redirect($service){
        return Socialite::driver($service)->redirect();
    }

    public function callback($provider = "facebook"){

        $Socialite = Socialite::driver($provider) ;
        dd($Socialite);
//        $user = $this->createOrGetUser($provider, $providerUser);
//
//        Auth::login($user, true);

        return redirect()->to('/home');
    }

    public function  modal_create_post(){

        $pages = explode(".", Auth::user()->pages);
        $ids = explode(".", Auth::user()->ids);

        return view('socials.modal_create_post',compact('pages','ids'));
    }

    public function createOrGetUser($provider, $providerUser)
    {
        //get user by provider user id
        $account = Social::whereProvider($provider)
            ->whereProviderUserId($providerUser->getId())
            ->first();
        //IF ACCOUNT IN DB
        if ($account) {
            return $account->user;
            //social account NOT registered yet
        } else {
            //before create social
            //get user from db
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => md5(rand(1,10000)),
                    'token' => $providerUser->token,
                ]);

            }
            // now create social
            $account = new Social([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            //attach user with social account
            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}
