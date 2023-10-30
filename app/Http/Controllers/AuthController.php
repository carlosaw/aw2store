<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function register_action(RegisterRequest $request)
    {   // echo 'O código chegou até aqui!';
        // dd($request);
        $userData = $request->only(['name', 'email', 'password']);
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);

        Auth::loginUsingId($user->id);
        return redirect()->route('select-state');
        dd($user);
    }

    public function state_action(Request $request)
    {
        dd($request);
    }

    public function select_state()
    {
        $data['states'] = State::all();
        return view('auth.select-state', $data);
    }

    public function select_state_action(Request $request)
    {
        $data = $request->only(['state']);
        $stateRegister = State::find($data['state']);
        if(!$stateRegister) {
            return redirect('/login');
        }
        $user = Auth::user();
        $user->state_id = $stateRegister->id;
        $user->save();
        return redirect()->route('home');
    }
}
