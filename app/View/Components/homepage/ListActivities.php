<?php

namespace App\View\Components\homepage;

use App\Models\Paket;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListActivities extends Component
{
    /**
     * Create a new component instance.
     */
    public $listactivities;
    public function __construct()
    {
        $this->listactivities = Paket::all()->toArray();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.homepage.list-activities');
    }
}