<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $title;
    public $content;

    protected $rules = [
        'title' => 'required',
        'content' => 'required|min:10'

    ];

    public function saveContent(){
        // dd($this->title, $this->content);
        $this->validate();

        $this->reset('title', 'content');

        session()->flash('success', 'O conteúdo foi salvo com sucesso');
    }


    public function render()
    {
        return view('livewire.test');
    }
}
