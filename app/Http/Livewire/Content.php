<?php

namespace App\Http\Livewire;

use App\DraculaTheme;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use SensioLabs\AnsiConverter\AnsiToHtmlConverter;

class Content extends Component
{
    public $rawContent = '';

    public $content = 'waiting...';

    protected $listeners = ['echo:content,ContentUpdated' => 'appendContent'];

    public function appendContent($event)
    {
        $this->rawContent .= $event['content'];
        $this->content = (new AnsiToHtmlConverter(new DraculaTheme))->convert($this->rawContent);
    }

    public function render()
    {
        return view('livewire.content');
    }
}
