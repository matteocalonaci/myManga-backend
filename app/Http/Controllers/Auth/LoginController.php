<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Override the login method to add custom logic.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        // Validazione dei dati di login
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentativo di autenticazione
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autenticazione riuscita
            return redirect()->intended($this->redirectTo);
        }

        // Autenticazione fallita
        return back()->withErrors([
            'email' => 'Le credenziali fornite non corrispondono ai nostri record.',
        ])->withInput($request->only('email'));
    }
}
