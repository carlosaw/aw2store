<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\AdvertiseImage;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{
    public function show(String $slug)
    {
        $ad = Advertise::where('slug', $slug)->first();
        //dd($ad);
        if (!$ad) {
            return redirect()->route('home');
        }
        $ad->views++;
        $ad->save();

        return view('single-ad', compact('ad'));
    }

    /* TODO: Excluir as imagens relacionadas do storage.*/

    public function delete(String $id)
    {
        /* Só podem deletar ADS que a eles pertencem. */
        $ad = Advertise::where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->first();
        /* Só conseguem fazer uma ação de deletar se o AD existir */
        if (!$ad) {
            return redirect()->route('home');
        }
        /* Tem que excluir as imagens relacionadas do banco. */
        $ad->delete();
        return redirect()->back();
    }
}
