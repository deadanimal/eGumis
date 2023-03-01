<?php

namespace App\Http\Controllers;

use App\Models\SecUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyLoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
           $user = SecUser::where('username',$request->username)->first();
           Auth::login($user);
           dd('betul');
           return redirect('/audit_trail');
        }
        dd('salah');
        return redirect('login');
    }
}
