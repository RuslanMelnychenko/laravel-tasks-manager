<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function show()
    {
        if (Auth::check()) {
            return redirect()->intended();
        }
        return view('auth.login');
    }

    public function action(LoginRequest $request)
    {

        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->withErrors([
            'email' => __('auth.failed')
        ])->onlyInput('email');
    }
}
