<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::get();
        return response()->json($data);
    }
    public function store(Request $request)
    {    
    $data = Post::updateOrCreate(
        [
            'id' => $request->id,
        ],
        [
            'name'=>$request->name,
        ]
    );

    return response()->json(
        $data
    );
}

public function edit($id)
{
    $data = Post::where('id',$id)->first();
    return response()->json(
        $data
    );
}
}
