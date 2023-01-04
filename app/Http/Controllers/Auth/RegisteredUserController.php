<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
class RegisteredUserController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' =>['required', 'string', 'max:255'],
            'email' =>['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' =>['required', 'confirmed', Rules\Password::defaults()],
        ]);


        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);
        // Auth::login($user); login auto

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        //$user->assignRole('cliente');
        $user->roles()->attach(Role::where('name', 'user')->first());

        return to_route('login')->with('status', 'Your account has been created');
    }
}
