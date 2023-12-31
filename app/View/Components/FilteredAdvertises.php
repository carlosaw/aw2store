<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FilteredAdvertises extends Component
{
    public $advertisesList;
    /**
     * Create a new component instance.
     */
    public function __construct()
    
    {
        //
        $this->advertisesList = [
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
            [
                'image' => 'http://placehold.it/145x145',
                'title' => 'Tênis vans Baby - 1 ano',
                'price' => 'R$ 189,99',
                'href' => '#'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}
