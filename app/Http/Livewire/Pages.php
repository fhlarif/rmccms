<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Pages extends Component
{

    public $slug;
    public $title;
    public $content;

    /**
     * render/show the page
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.pages');
    }
}
