<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;


class AdCreate extends Component
{
    public $title;
    public $price;
    public $description;
    public $category_id;

    public function render()
    {
        $categories = Category::all();
        return view('livewire.ad-create', compact('categories'));
    }

    public function save()
    {
        //dd($this->title);
        //dd($this->category_id);
    }
}
