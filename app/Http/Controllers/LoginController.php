<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',  ['except' => 'destroy']);
    }

    public function create()
    {
        return view('login.create');
    }

    public function store()
    {
        $user = User::where('email', request('email'))->where('is_verified', true)->first();

        if(!$user)
        {
            return back()->withErrors(['message' => 'Please verify your account.']);
        }

        if(!auth()->attempt(
            request(['email', 'password'])
        )){
            return back()->withErrors([
                'message' => 'Bad credentials. Please try again.'
            ]);
        }
        return redirect('/teams');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/teams');
    }

    public function verify($id)
    {
        $user=User::find($id);
        $user->is_verified=true;

        $user->save();

        return redirect('/login');
    }
}
