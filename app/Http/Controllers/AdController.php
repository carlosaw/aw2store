<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\State;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\AdvertiseRequest;
use App\Models\AdvertiseImage;
use App\Models\User;
use Illuminate\Support\Str;
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

        $relatedAds = Advertise::where('category_id', $ad->category_id)
            ->where('state_id', $ad->state->id)
            ->where('id', '<>', $ad->id)
            ->with('images')
            ->orderBy('created_at', 'desc')
            ->orderBy('views', 'desc')
            ->limit(4)
            ->get();
        //dd($relatedAds);
        return view('single-ad', compact('ad', 'relatedAds'));
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

    public function list()
    {
        return view('list');
    }

    public function Category(Request $r, String $slug)
    {
        $category = Category::where('slug', $slug)->first();

        if (!$category) {
            return redirect()->route('home');
        }

        $filteredAds = Advertise::where('category_id', $category->id)
            ->with('images')
            ->orderBy('created_at', 'desc')
            ->paginate(4);

        return view('category-list', compact('filteredAds', 'category'));
    }

    public function create() {
        return view('dashboard/ad_create');
    }

    public function create_action(AdvertiseRequest $request)
    {
        $user = Auth::user();// Usuário autenticado
        $user_id = Auth::user()->id;// ID do usuário
        $state_id = $user->state->id;// ID do Estado do usuário

        $view = 0;

        $new_ad = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'price' => $request->price,
            'negotiable' => $request->negotiable,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'contact' => $request->contact,
            'views' => $view,
            'user_id' => $user_id,
            'state_id' => $state_id,
            //'photos' => $photos
        ];

        if($new_ad) {
            $advertisesId = Advertise::get('id');
            $adId = AdvertiseImage::get('advertise_id');
            dd($adId);

            $photos = AdvertiseImage::get('url', 'id')->where('advertise_id', $advertisesId);
            $photos[] = $request->photos;

            $new_photo = [
                'url' => $request->photos,
                'advertise_id' => $request->advertise_id,
                'featured' => $request->featured
            ];

            $new_photo = new AdvertiseImage($new_photo);

            dd($new_photo);
        }

            $new_ad = new Advertise($new_ad);
            //$new_ad->save();
            dd($new_ad);

        return view('dashboard/ad_create');
    }
}
