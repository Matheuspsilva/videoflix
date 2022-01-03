<?php

namespace App\Http\Livewire\Content;

use App\Models\Content as ModelsContent;
use Livewire\Component;

class Content extends Component
{
    public $content;

    public function mount(ModelsContent $content){
        $this->content = $content;
    }

    public function render()
    {
        return view('livewire.content.content');
    }
}
