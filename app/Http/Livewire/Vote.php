<?php

namespace App\Http\Livewire;

use App\Models\Vote as ModelsVote;
use Livewire\Component;

class Vote extends Component
{

    public bool $vote;
    public $votedata;
    public function mount(){
        $this->vote = ModelsVote::where('user_id',session('user')->id)->exists();
        $this->votedata = ModelsVote::where('user_id',session('user')->id)->get();
    }
    
    public function render()
    {
        return view('livewire.vote');
    }
}
