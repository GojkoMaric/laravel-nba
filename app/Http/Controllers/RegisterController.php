<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Mail;
use \App\Mail\VerifyUser;


class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email'=> 'required | email',
            'password'=>'required | confirmed | min:6',

        ]);

        $user = new User();
        $user->name = request('name');
        $user->email= request('email');
        $user->password = bcrypt(request('password'));
        $user->is_verified=0;

        $user->save();

        Mail::to($user)->send(new VerifyUser($user));

        return redirect('/login');
    }
}
