<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
class ContactController extends Controller
{
    public function submit(ContactRequest $req){

        $contact = new Contact();
        $contact -> name = $req -> input('name');
        $contact -> email = $req -> input('email');
        $contact -> subject = $req -> input('subject');
        $contact -> message = $req -> input('message');

        if ($req->file('image') == null) {
            $url = " ";
            $contact->images = $url;
        }else{
            $url = $req -> file('image')->store('images', 'public');
            $contact->images = $url;
        }

        $contact -> save();
        return redirect() -> route('home');

    }
    public function allData(){
        $contact = new Contact;
        return view('messages', ['Data' =>$contact->inRandomOrder()->get()]);
    }

    public function showOneMessage($id){
        $contact = new Contact;
        return view('one-message', ['data'=> $contact->find($id)]);

    }

    public function updateMessage($id){
        $contact = new Contact;
        return view('update-message', ['data'=> $contact->find($id)]);
    }

    public function updateMessageSubmit($id, ContactRequest $req){

        $contact = Contact::find($id);
        $contact -> name = $req -> input('name');
        $contact -> email = $req -> input('email');
        $contact -> subject = $req -> input('subject');
        $contact -> message = $req -> input('message');

        $contact -> save();

        return redirect() -> route('contact-data-one', $id)->with('success', 'Сообщения отредактировано');

    }

    public function deleteMessage($id){
        Contact::find($id)->delete();
        return redirect() -> route('contact-data')->with('success', 'Сообщения удалено');

    }

}
