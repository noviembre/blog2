<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{


    #=============== MOSTRAR INFO EN EL FRONTEND  ================
    public function index(){

        return view('index')

            #============ Mostrar Titulo de la pagina ==============
            ->with('title', Setting::first()->site_name)

            #============ Listar Categorias en el Menu =============
            ->with('categories', Category::take(5)->get())

            #============ Mostrar el primer post ===================
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())

            #============ Mostrar el segundo post ==================
            ->with('second_post',Post::orderBy('created_at','desc')
                ->skip(1)->take(1)->get()->first())

            #============ Mostrar el tercer post ===================
            ->with('third_post',Post::orderBy('created_at','desc')
                    ->skip(2)->take(1)->get()->first())

            #============ Mostrar el Ajustes de la pagina ==========
            ->with('settings', Setting::first())

            #============ Mostrar categoria numero 1 ===============
            ->with('laravel', Category::find(1))

            #============ Mostrar categoria numero 3 ===============
            ->with('tuto', Category::find(3));

    }



    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();

        #============ consulta: Prev, Next ===================
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
            ->with('title', $post->title)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get())

            #========== Llamar btn Prev, Next =================
            ->with('next', Post::find($next_id))
            ->with('prev', Post::find($prev_id))

            #============ Mostrar lista de Etiquetas ==========
            ->with('tags', Tag::all());

    }


    public function category($id)
    {
        $category = Category::find($id);
        return view ('category')->with('category', $category)
            ->with('title', $category->name)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get())
            ->with('tags', Tag::all());
    }


    public function tag($id)
    {
        $tag = Tag::find($id);
        return view('tag')->with('tag',$tag)
            ->with('title', $tag->tag)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get());
    }
}
