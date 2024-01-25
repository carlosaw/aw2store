<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertise;
use Illuminate\Support\Facades\Auth;
use App\Models\AdvertiseImage;

class AdController extends Controller
{
    /**
     * Só podem deletar ADS que a eles pertencem.
     * Só conseguem fazer uma ação de deletar se o AD existir.
     * Tem que excluir as imagens relacionadas do banco.
     * TODO: Excluir as imagens relacionadas do storage.
    */
    public function delete(String $id) {
        $ad = Advertise::where('id', $id)->where('user_id', Auth::user()->id)->first();

        if(!$ad) {
            return redirect()->route('home');
        }
        AdvertiseImage::where('advertise_id', $ad->id)->delete();
        $ad->delete();
        return redirect()->back();
    }
}