<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use App\Models\Advertise;

class filteredAdvertises extends Component
{
    public $advertisesList;

    public function __construct()

    {
        $this->advertisesList = Advertise::orderBy('created_at', 'desc')->limit(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.filtered-advertises');
    }
}
