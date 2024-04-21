<?php

namespace App\View\Components;

use App\Models\Screengroup;
use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $screengroups = Screengroup::query()->orderBy('order')->with('screens')->get(); 

        return view('layouts.app', compact('screengroups'));
    }
}
