<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CandidateController extends Controller
{
    public function list(){
        // $c = Candidate::find(1);
        // dd($c);
        $candidates = Candidate::inRandomOrder()->limit(6)->get();
        // inRandomOrder()
        // dd($candidates);
        return view('candidate.candidates',['candidates' => $candidates]);
    }

    public function detail(Candidate $candidate){

        return view('candidate.candidate',['candidate' => $candidate]);
    }
}
