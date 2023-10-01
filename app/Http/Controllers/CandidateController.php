<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;

class CandidateController extends Controller
{
    public function list(){
        $bestvis = array();


        $candidates = Candidate::inRandomOrder()->paginate(2);

        $bestvisited = Candidate::select('candidates.id','candidates.name','candidates.firstname','candidates.photo')
            ->leftJoin('interactions', 'interactions.candidate_id', '=', 'candidates.id')
            ->selectRaw('sum(interactions.seen) as vue_sum')
            ->has('interactions')
            ->groupBy('candidates.id')
            ->orderBy('vue_sum', 'desc')
            ->limit(6)
            ->get();

        // dd($bestvisited);

        foreach ($bestvisited as $key => $item) {

            $photo  = array();

                array_push($photo,
                    [
                        'src' => $item->photo,
                    ],
                );

            $base64_string = "BASE64_ENCODED_STRING";
            $image_data = base64_decode($item->photo);
            $file_path = "image$item->fullname().png";
            file_put_contents($file_path, $image_data);


            $tab['name'] = $item->fullname();
            $tab['steps'] = (int) $item->vue_sum;
            $tab['pictureSettings'] = $photo;

            array_push($bestvis,$tab);
            // dd($tab);

        }
        // $provs = json_encode($provs);

        // $data = ['message' => 'No new orders!'];
        // return response()->json($data);
        $a = response()->json($bestvis);
        // return $a;
        $bestvis = $a;


        return view('candidate.candidates',[
            'candidates' => $candidates,
            'bestvis' => $bestvis,
        ]);
    }

    public function detail(Candidate $candidate){


        $RecomCandidates = Candidate::whereHas('candidature', function ($query) use($candidate){
                $query->where('id_circumscription', $candidate->candidature->id);
                })
                ->orWhere('id_party',$candidate->id_party)
                ->where('id','!=', $candidate->id)
                ->has('candidature')
                ->inRandomOrder()->limit(3)->get();

        return view('candidate.candidate',[
            'candidate' => $candidate,
            'RecomCandidates' => $RecomCandidates
        ]);
    }
}
