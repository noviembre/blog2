<?php

namespace App\Http\Controllers;

use App\Setting;
use App\Category;
use App\Post;
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
        return view('single')->with('post', $post)
            ->with('title', $post->title)
            ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get());
    }
}
