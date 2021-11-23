<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPost extends Component
{
    public $query = '';
    public function render()
    {
        return view('livewire.search-post');
    }
}
