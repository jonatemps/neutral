<?php

namespace App\Http\Livewire;

use App\Models\Candidate as ModelsCandidate;
use Livewire\Component;

class Candidate extends Component
{

    public $candidates;
    public $perPage = 10;

    public function mount($id = null)
    {
        $this->candidates = ModelsCandidate::orderBy('id', 'desc')->take(6)->get();
    }

    public function render()
    {
        $articles = Article::paginate($this->perPage);

        return view('livewire.candidate',[
            'candidates' =>$this->candidates,
        ]);
    }
}
