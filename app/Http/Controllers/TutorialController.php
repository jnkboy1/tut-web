<?php

namespace codetech\Http\Controllers;

use Illuminate\Http\Request;

use codetech\Http\Requests;
use codetech\Article;

class TutorialController extends Controller
{
    public function index()
    {
       // $tags = Article::
        return view('tutorials.index');
    }

    public function show($tag)
    {
        $tutorials = Article::all()->where('tag',$tag);
        //$request->session()->put('type',$tutorials->tag);
        session(['type' => $tag ]);
        return view('tutorials.show',compact('tutorials'));
    }
}
