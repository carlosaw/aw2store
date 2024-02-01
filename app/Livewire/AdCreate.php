<?php

namespace App\Livewire;

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

    protected $rules = [
        'title' => 'required|min:8|max:255',
        'price' => 'required|numeric',
        'negotiable' => 'boolean',
        'description' => 'required|min:8|max:255',
        'category_id' => 'required|exists:categories,id',
    ];

    public function render()
    {
        $categories = Category::all();
        return view('livewire.ad-create', compact('categories'));
    }

    public function save()
    {
        $this->validate();
        //dd($this->title);
        //dd($this->category_id);
        // return 'saved';
        dd($this->photos);
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
