<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;


class ContactController extends Controller{

    public function submit(ContactRequest $req){
//       $validation = $req->validate([
//           'subject' => 'required|min:5|max:50'
//       ]);
    }
}
