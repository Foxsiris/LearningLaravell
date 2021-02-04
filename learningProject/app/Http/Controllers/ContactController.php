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

    public function showOneMessage($id){
        $contact = DB::table('contacts')->find($id);
        return view('oneMessage',['data'=>$contact]);
    }

    public function updateMessage($id){
        $contact = DB::table('contacts')->find($id);
        return view('updateMessage',['data'=>$contact]);
    }

    public function updateMessageSubmit($id,ContactRequest $req)
    {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');

        $contact->save();

        return redirect()->route('contact-data-one',$id)->with('success', 'Данные были успешны обновлено');
    }
    public function deleteMessage($id){
        Contact::destroy($id);
        return redirect()->route('contact-data')->with('success', 'Данные были успешны удалено');
    }

}
