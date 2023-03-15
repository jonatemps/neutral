<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact(){
        return view('contact');
    }

    public function submitMessage(Contact $contact){

        $a = $contact->fill(request()->input())->save();

        // dd($contact);

        return back()->with('success', 'Merci de nous avoir contacté !');
    }

}
