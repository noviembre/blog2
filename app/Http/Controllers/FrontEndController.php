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
            ->with('first_post', Post::orderBy('created_at', 'desc')->first());
    }

}
