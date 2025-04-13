<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\V2\PostResource;
use App\Http\Resources\V2\PostCollection;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate();

        if ($posts->IsEmpty()){
            return response()->json(["menssage" => "No hay post disponibles", 200]);
        }

        return new PostCollection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                "message" => "No se encontró el post con ID $id"
            ], 404);
        }

        return new PostResource($post);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json([
            "menssage" => "Eliminado correctamente"
        ], 200);
    }
}
