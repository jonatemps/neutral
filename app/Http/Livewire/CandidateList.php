<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use Livewire\Component;



class CandidateList extends Component
{
    public $perPage = 9;

    public function loadMore()
    {
        $this->perPage += 9;
    }

    public function render()
    {
        $candidates = Candidate::paginate($this->perPage);

        return view('livewire.candidate-list',[
            'candidates' =>$candidates,
        ]);
    }
}
