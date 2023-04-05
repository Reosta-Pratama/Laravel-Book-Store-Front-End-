<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handlerGoogleCallBack()
    {
        $user = Socialite::driver('google')->user();
        $finduser = User::where('google_id', $user->getId())->first();
        // dd($user);

        if($finduser != null){
            Auth::login($finduser);
            return redirect()->intended('dashboard');
        }
        
        else{
            $newuser = new User();
            $newuser->name = $user->getName();
            $newuser->email = $user->getEmail();
            $newuser->google_id = $user->getId();
            $newuser->password = bcrypt('12341234');
            $newuser->save();

            Auth::login($newuser);
            return redirect()->intended('dashboard');
        }
    }
}
