<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function show(Request $request)
    {
        if (Auth::check()) {
            return redirect()->intended();
        }
        return view('auth.register');
    }

    public function action(RegisterRequest $request)
    {
        $user = User::create([
            ...$request->validated(),
            'name' => $request->validated('email'),
        ]);

        \auth()->login($user);

        return redirect('/');
    }
}
