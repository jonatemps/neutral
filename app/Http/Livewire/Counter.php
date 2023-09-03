<?php

namespace App\Http\Livewire;

use App\Models\Interaction;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Cookie;

class Counter extends Component
{
    public $countLike = 0;
    public $countDislike = 0;
    public $CountVue = 0;
    public $CountComment;



    public function mount(Request $request)
    {

        // setcookie('HaveSee', 'yes', time() + 7776000);

        dd(request());

        if (!isset($_COOKIE['HaveSee'])) {
            setcookie('HaveSee', 'yes', time() + 7776000);
            dd($_COOKIE['HaveSee'],request());
        }

        $interaction = Interaction::firstOrCreate(
            ['candidate_id' => request('candidate')->id]
        );

        dd($interaction);
        // dd(request('candidate')->interactions);
        $this->CountComment = request('candidate')->comments->count();

        $this->CountVue++;
    }

    public function like()
    {
        $user = Interaction::firstOrCreate(
            ['candidate_id' => $email],
            ['name' => $name]
        );
        $this->countLike++;
    }

    public function dislike()
    {

        $this->countDislike++;
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
