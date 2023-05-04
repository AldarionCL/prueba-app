<?php

namespace App\Http\Controllers;

use App\Models\Coments;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $idusuario = Auth::user()->id;
        $usuario= User::find($idusuario);

        $postCount= Posts::where('user_id',$idusuario)->count();
        $posts = Posts::where('posts.user_id',$idusuario)->get();

        $comentarios = array();
        foreach ($posts as $post)
        {
            $comentarios[$post->id]["post"] = array(
                'id' => $post->id,
                'titulo_post' => $post->titulo_post,
                'texto_post' => $post->texto_post
            );
            $coment = Coments::where('posts_id', $post->id)->get();
            foreach($coment as $comentario)
            {
                $usuarioComentario = User::find($comentario->user_id);
                $comentarios[$post->id]["comentario"][] =
                    array(
                        'user' => $usuarioComentario->name,
                        'comentario' => $comentario->comentario,
                    );
            }
        }


        return view('home', compact('usuario', 'postCount','posts','comentarios'));
    }
}
