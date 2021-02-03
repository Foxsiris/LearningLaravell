<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class ContactController extends Controller
{

    public function submit(ContactRequest $req)
    {

        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');

        $contact->save();

        return redirect()->route('home')->with('success', 'Данные были успешны добавлены');
    }

    public function allDate(){
        $contact = DB::table('contacts')->get();
        return view('messages',['data'=>$contact]);
    }
}
