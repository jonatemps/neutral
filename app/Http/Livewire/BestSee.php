<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\Candidature;
use Livewire\Component;

class BestSee extends Component
{
    public $categorySee;
    public $categoryLike;

    public function render()
    {
        if ($this->categorySee && !$this->categoryLike) {
            // dd($this->categorySee);
            $candidatures = Candidature::whereHas('mandates', function ($query) {
                return $query->where('mandate_id', $this->categorySee);
            })
            ->join('candidates', 'candidates.id', '=', 'candidatures.candidate_id')
            ->join('interactions', 'interactions.candidate_id', '=', 'candidates.id')
            ->orderBy('interactions.seen','desc')
            ->select('candidates.*','candidatures.*')
            ->take(6)->get();

            // $candidatures = Candidature::whereHas('mandates', function ($query) {
            //     return $query->where('mandate_id', $this->categorySee);
            // })->get();
        }elseif (!$this->categorySee && $this->categoryLike) {
            $candidatures = Candidature::whereHas('mandates', function ($query) {
                return $query->where('mandate_id', $this->categoryLike);
            })
            ->join('candidates', 'candidates.id', '=', 'candidatures.candidate_id')
            ->join('interactions', 'interactions.candidate_id', '=', 'candidates.id')
            ->orderBy('interactions.like','desc')
            ->select('candidates.*','candidatures.*')
            ->take(6)->get();
        }elseif ($this->categorySee && $this->categoryLike) {
            $candidatures = Candidature::whereHas('mandates', function ($query) {
                return $query->where('mandate_id', $this->categoryLike)
                                ->orWhere('mandate_id', $this->categorySee);
            })
            ->join('candidates', 'candidates.id', '=', 'candidatures.candidate_id')
            ->join('interactions', 'interactions.candidate_id', '=', 'candidates.id')
            ->orderBy('interactions.like','desc')
            ->orderBy('interactions.seen','desc')
            ->select('candidates.*','candidatures.*')
            ->take(6)->get();
        }else {


            $candidatures = Candidature::whereHas('mandates', function ($query) {
                return $query->whereIn('mandate_id', [1,2,3]);
            })
            ->join('candidates', 'candidates.id', '=', 'candidatures.candidate_id')
            ->join('interactions', 'interactions.candidate_id', '=', 'candidates.id')
            ->orderBy('interactions.seen','desc')
            ->select('candidates.*','candidatures.*')
            ->take(6)->get();

        }
        // dd($candidatures);

        return view('livewire.best-see',[
            'candidatures' => $candidatures
        ]);
    }


    public function seeMore()
    {
        return redirect()->route('candidates');
    }
}
