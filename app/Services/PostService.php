<?php

namespace App\Services;
use App\Models\Contact;
use Illuminate\Http\Request;

interface PostService
{
    public function getAll();

    public function delete(Contact $contact);

    public  function store(Request $request);

    public  function edit(Contact $contact,Request $request);


}