<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\Candidature;
use App\Models\Circumscription;
use App\Models\Mandate;
use App\Models\Party;
use App\Models\Province;
use Livewire\Component;



class CandidateList extends Component
{
    public $searchBar,$searchAdvenced,$DepProv,$DepNatoin,$Presidence,$party,$province,$circumpcription;
    public $perPage = 6;

    public function render()

    {

        // Table::where('id', 1)->select('name', 'surname')->get();
        $provinces = Province::select('id','name')->get()->toArray();
        $mandates = Mandate::select('id','name')->get()->toArray();
        $parties = Party::select('id','name')->get()->toArray();
        $circumpcriptions = Circumscription::where('id_province',$this->province)->select('id','name')->get()->toArray();
        $candidatures = Candidature::query();
        // $query = Candidature::select('id')->get();

        if ($this->searchBar) {
            $candidatures = $candidatures->whereHas('candidate', function ($query) {
                return $query->where('lastname', 'like', $this->searchBar.'%')
                            ->orWhere('name', 'like', $this->searchBar.'%')
                            ->orWhere('firstname', 'like', $this->searchBar.'%');
                });

        } elseif ($this->DepProv || $this->DepNatoin || $this->Presidence) {
            $candidatures = $candidatures->whereHas('mandates', function ($query) {
                            return $query->whereIn('mandate_id', [$this->DepProv,$this->DepNatoin,$this->Presidence]);
                            // return $query->where('mandate_id', $this->DepNatoin);
                            // return $query->orWhere('mandate_id', $this->DepProv);
                            // return $query->orWhere('mandate_id', $this->Presidence);
                        });

        }elseif ($this->party) {
            $candidatures =  $candidatures->whereHas('candidate', function ($query) {
                        return $query->where('id_party', '=', $this->party);
                        });

        }elseif ($this->province) {
            $candidatures =  $candidatures->whereHas('circumscription', function ($query) {
                            return $query->where('id_province', '=', $this->province);
                            });

        }elseif ($this->circumpcription) {
            $candidatures =  $candidatures->where('id_circumscription',$this->circumpcription);
        }
        $candidatures =  $candidatures->latest()->paginate($this->perPage);
        
        return view('livewire.candidate-list',[
            'parties' =>$parties,
            'candidatures' =>$candidatures,
            'provinces' =>$provinces,
            'mandates' =>$mandates,
            'circumpcriptions' =>$circumpcriptions,
        ]);
    }
}
