<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Socialite;

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
      /**
    * Redirect the user to the google authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
        dd($user);
        //guardo en BD

        // $user->token;
    }

    protected function validateLogin(Request $request)
      {
          $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'max:14'],
        ],
      [
        'email.required' => 'Debe ingresar un email',
        'email.string' => 'El email no puede ser un número',
        'email.email' => 'Debe ingresar un email válido',
        'email.max' => 'El correo debe contener menos de 255 caracteres',

        'password.required' => 'Debe ingresar una contraseña',
        'password.string' => 'La contraseña debe contener letras',
        'password.min' => 'La contraseña debe tener al menos 6 caracteres',
        'password.max' => 'La contraseña no puede contener más de 14 caracteres',
      ]);

    }
}
