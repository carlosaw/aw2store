<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function my_account() 
    {
        $data['user'] = auth()->user();// Pega dados do usuário
        $data['states'] = State::all();// Pega os estados
        
        return view('dashboard.my_account', $data);
    }

    public function my_account_action(UpdateProfileRequest $request)
    {
        //dd($request);
        $data = $request->only(['name', 'email', 'state_id']);
        $stateRegister = State::find($data['state_id']);
        $userId = Auth::user()->id;
        $user = User::find($userId);
        $user->update($data);
        return redirect()->route('my_account')->with('success', 'Perfil autalizado com sucesso!');
    }

    public function my_ads() {
        $user = Auth::user();
        $advertises = $user->advertises;
        //dd($advertises[0]->images);

        return view('dashboard.my_ads', compact('advertises'));
    }
}