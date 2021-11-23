<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPost extends Component
{
    public $query = '';
    public $results;
    protected $queryString = ['query'];
    public function render()
    {
        if(strlen($this->query) > 2 ){
            $this->results = Post::where('title', 'like', "%{$this->query}%")->get();
        }
        return view('livewire.search-post');
    }
}
