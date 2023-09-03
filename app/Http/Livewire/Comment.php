<?php

namespace App\Http\Livewire;

use App\Models\Comment as ModelsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Comment extends Component
{


    public $name;
    public $email;
    public $content;
    public $candidate;
    public $nameReplay;
    public $emailReplay;
    public $contentReplay;



    public function mount(Request $request){


        $this->candidate = request('candidate');
        // dd($this->candidate_id);
    }

    public function submit(Request $request)
    {

        // if (Session::get('user_name')) {
        //     # code...
        // }
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'content' => 'required',
        ]);

        $comment =new  ModelsComment();

        $comment->fill($validatedData);
        $comment->candidate_id = $this->candidate->id;
        $comment->save();


        $this->render();

        return redirect()->back()->cookie('name','value',1);
    }

    public function saveReplay($comment_id)
    {
        $validatedData = $this->validate([
            'nameReplay' => 'required|min:6',
            'emailReplay' => 'required|email',
            'contentReplay' => 'required',
        ]);

        // dd($validatedData);


        $comment = new  ModelsComment();

        $comment->name = $validatedData['nameReplay'];
        $comment->email = $validatedData['emailReplay'];
        $comment->content = $validatedData['contentReplay'];
        $comment->candidate_id = $this->candidate->id;
        $comment->comment_id = $comment_id;

        $comment->save();

        $this->render();

        return redirect()->back()->cookie('name','value',1);
    }

    public function render()
    {
        $comments = $this->candidate->comments->where('comment_id',null);

        $cookie = cookie('name', 'value', 1);


        // return response(view('livewire.comment',[
        //     'comments' => $comments
        // ]))->cookie('name','value',1);

        return view('livewire.comment',[
            'comments' => $comments
        ]);
    }
}
