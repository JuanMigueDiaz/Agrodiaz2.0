<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function blog()
    {
        $posts = [
            ['id' => 1, 'title' => 'Noticias', 'slug' => 'notocias'],
            ['id' => 2, 'title' => 'Cómo cuidar tu cultivo', 'slug' => 'cuidado-cultivo']
        ];
            
        return view('blog', ['posts' => $posts]); 

    }

    public function post($slug)
    {
      //consulta a DB
      $post = $slug;

      return view('post', ['post' => $post]);
    }
}    
