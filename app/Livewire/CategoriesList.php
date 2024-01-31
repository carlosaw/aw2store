<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoriesList extends Component
{
    public function render()
    {
        $data['categories'] = Category::all();
        return view('livewire.categories-list', $data);
    }
}
