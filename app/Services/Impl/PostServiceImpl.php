<?php

namespace App\Services\Impl;

use App\Models\Contact;

use App\Services\PostService;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\Console\Input\Input;


class PostServiceImpl implements PostService
{
    public function getAll()
    {
        $contacts = Contact::all();

        if($contacts==null){
            throw new \Exception('Нет данных',404);
        }

        return $contacts;
    }


    public function delete(Contact $contact)
    {

        $contact->delete();

        return $contact;
    }



    public function store(Request $request)
    {
        $contact = new contact();
        $contact->name = $request->get('name');;
        $contact->email =$request->get('email');;
        $contact->subject = $request->get('subject');;
        $contact->message = $request->get('message');;
        $contact->image = $request->get('image');;

        $contact->save();
        return $contact;
    }

    public function edit(Contact $contact, Request $request)
    {
        $contact->name = $request->get('name');;
        $contact->email =$request->get('email');;
        $contact->subject = $request->get('subject');;
        $contact->message = $request->get('message');;
        $contact->image = $request->get('image');;
        $contact->save();
        return $contact;
    }
}
