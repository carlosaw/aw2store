<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\State;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class hero extends Component
{
    public $states;
    public $categories;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //Carregando todos os estados do Brasil.
        $this->states = State::all();

        $this->categories = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
