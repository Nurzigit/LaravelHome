<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Contact;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService)
    {
       $this->postService = $postService;
    }


    public function index(){
        try {
            $contacts=$this->postService->getAll();

            return response()->json([
                'status'=> true,
                'contacts' => PostResource::collection($contacts)
            ]);
        }catch (\Exception $e){
            return response()->json([
               'status'=>false,
               'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }

    public function del(Contact $contact){
        try {
            $contacts=$this->postService->delete($contact);
            return response()->json([
                'status'=> true,
                'contacts'=>$contacts
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }



    public function store(Request $request){
        try {
            $contacts=$this->postService->store($request);
            return response()->json([
                'status'=> true,
                'contacts'=>$contacts
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }

    public function edit(Contact  $contact,Request $request){
        try {
            $contacts=$this->postService->edit($contact,$request);
            return response()->json([
                'status'=> true,
                'contacts'=>$contacts
            ]);
        }catch (\Exception $e){
            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage()
            ],$e->getCode());
        }
    }
}
