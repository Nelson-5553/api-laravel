<?php

namespace App\Http\Controllers\Api\posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Resources\V2\PostResource;
use App\Http\Resources\V2\PostCollection;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::select('id', 'title', 'slug', 'content', 'category_id', 'user_id', 'created_at')
        ->with([
        'category:id,name',
        'user:id,name,email'
        ])
        ->latest()
        ->paginate(9);


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
    $request->validate([
        'title' => 'required',
        'slug' => 'required|unique:posts',
        'content' => 'required',
        'category_id' => 'required',
    ]);

    $post = Post::create([
        'title' => $request->title,
        'slug' => $request->slug,
        'content' => $request->content,
        'category_id' => $request->category_id,
        'user_id' => Auth::id(), // ✔ Incluido en la creación
    ]);

    return response()->json([
        "message" => "Post creado correctamente",
        "data" => new PostResource($post)
    ], 201);
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

    //consejo del dia que se actualizara en la home}

    public function home()
    {
        $posts = Post::inRandomOrder()->take(1)->get();

        if ($posts->IsEmpty()){
            return response()->json(["menssage" => "No hay consejo del dia disponible", 200]);
        }

        return new PostCollection($posts);
    }
}
