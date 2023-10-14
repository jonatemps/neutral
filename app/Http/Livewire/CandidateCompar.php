<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class CandidateCompar extends Component
{
    public $candidate1,$candidate2;

    public function render()
    {
        if ($this->candidate1 && $this->candidate2) {

            // return redirect()->back();
            // dd($this->candidate1,$this->candidate2);
           $candidates = Candidate::whereIn('id',[$this->candidate1,$this->candidate2])->get();

        //    dd($candidates);
        } else {

        }

        // dd(Candidate::has('candidature')->get());
        return view('livewire.candidate-compar',[
            'candidates' => Candidate::has('candidature')->inRandomOrder()->get(),
            // 'candidates' => Candidate::has('candidature')->inRandomOrder()->get(),
        ]);
    }
}
