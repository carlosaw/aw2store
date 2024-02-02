<?php

namespace App\Livewire;

use App\Http\Requests\AdvertiseRequest;
use App\Models\Advertise;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdCreate extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $price;
    public $negotiable;
    public $category_id;
    public $photos = [];
    public $contact;
    public $user_id;
    public $state_id;

    protected $rules = [
        'photos' => 'required|array|min:1|max:5',
        'photos.*' => 'image|max:2048',
        'title' => 'required|min:8|max:255',
        'slug' => '0',
        'price' => 'required|numeric',
        'negotiable' => 'boolean',
        'description' => 'required|min:8|max:255',
        'category_id' => 'required|exists:categories,id',
        'contact' => 'required|numeric',
        'state_id' => 'nullable'
    ];

    public function render()
    {
        $categories = Category::all();
        $advertises = Advertise::all();
        return view('livewire.ad-create', compact('categories', 'advertises'));
    }

    public function save()
    {
        $this->validate();
    }

    /**
     * [] - Validar que o usuário só pode enviar uma imagem no frontend.
     * [] - Linkar um input type file com o livewire.
     * [] - Receber essa imagem no livewire.
     * [] - Exibir a imagem no frontend como miniatura.
     * [] - Validar que de fato é uma imagem no backend.
     * [] - Salvar a imagem.
     */
}
