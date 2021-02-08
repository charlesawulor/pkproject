<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

use App\User;
use Illuminate\Support\Facades\Auth;




class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     

    public function redirectToProvider() 
    {
    return Socialite::driver('github')->redirect();
    }

   public function handleProviderCallback() 
   { 
    $githubUser = Socialite::driver('github')->user();
    //dd($githubUser);
     
     //add user to database
    

    // stroing data to our use table and logging them in
    $data = [
        'name' => $githubUser->getName(),
        'email' => $githubUser->getEmail(),
        'provider_id' => $githubUser->getId(),
    ];
    
     // Here, check if the user already exists in your records

    $my_user = User::where('email','=', $githubUser->getEmail())->first();
    if($my_user === null) {
            Auth::login(User::firstOrCreate($data));
    } else {
        Auth::login($my_user);
    }

    //after login redirecting to home page
    return redirect($this->redirectPath());
 

   }





   public function redirectToProvider1() 
    {
    return Socialite::driver('google')->redirect();
    }

   public function handleProviderCallback1() 
   { 
    $googleUser = Socialite::driver('google')->user();
    //dd($githubUser);
     
     //add user to database
    

    // stroing data to our use table and logging them in
    $data = [
        'name' => $googleUser->getName(),
        'email' => $googleUser->getEmail(),
        'provider_id' => $googleUser->getId(),
    ];
    
     // Here, check if the user already exists in your records

    $my_user = User::where('email','=', $googleUser->getEmail())->first();
    if($my_user === null) {
            Auth::login(User::firstOrCreate($data));
    } else {
        Auth::login($my_user);
    }

    //after login redirecting to home page
    return redirect($this->redirectPath());




 


  }




   
}
