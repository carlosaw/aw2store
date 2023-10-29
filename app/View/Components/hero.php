<?php

namespace App\View\Components;

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
        $this->states = [
            ['value' => 'AC', 'name' => 'ACRE'],
            ['value' => 'MT', 'name' => 'MATO GROSSO'],
            ['value' => 'PR', 'name' => 'PARANÁ'],
            ['value' => 'SP', 'name' => 'SÃO PAULO'],
            ['value' => 'MG', 'name' => 'MINAS GERAIS'],
        ];

        $this->categories = [
            ['value' => 'categoria1', 'name' => 'Categoria 1'],
            ['value' => 'categoria2', 'name' => 'Categoria 2'],
            ['value' => 'categoria3', 'name' => 'Categoria 3']
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
