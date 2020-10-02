<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TextTile extends Component
{
    public $position;
    public $title;
    public $text;

    public function mount(string $position, string $title = '', string $text = '')
    {
        $this->position = $position;
        $this->title = $title;
        $this->text = $text;
    }

    public function render()
    {
        return view('livewire.text-tile');
    }
}
