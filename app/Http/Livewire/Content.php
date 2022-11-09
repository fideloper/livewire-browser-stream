<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Content extends Component
{
    public $rawContent = '';

    public $content = '';

    protected $listeners = ['echo:content,ContentUpdated' => 'appendContent'];

    public function appendContent($event)
    {
        $this->rawContent .= $event['content'];
        $this->content = $this->rawContent; // TODO: Parse raw content
    }

    public function render()
    {
        return view('livewire.content');
    }
}
