<?php

namespace codetech\Http\Controllers;

use Illuminate\Http\Request;

use codetech\Http\Requests;
use codetech\Article;
use Auth;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $body = $request->input('body');
        $tag = $request->input('tag');
        $article = new Article();
        $article->title = $title;
        $article->body = $body;
        $article->tag = $tag;
        $article->user_id = Auth::user()->id;
        if($article->save())
        {
            flash('Article created','success');
            return redirect('/');
        }
        else{
            flash('Unable to create Article','danger');
            return redirect('/');
        }
    }

    public function show($id)
    {
        $article = Article::find($id);
        if($article)
        {
            // return view('articles.show', compact('article',$article));
            return response()->json(array('title' => $article->title, 'body'=> $article->body));
        }
        else{
            flash('This article doesn\'t exist','danger');
            return redirect('/');
        }
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit',compact('article', $article));
    }

    public function update($id, Request $request)
    {
        $article = Article::findOrFail($id);

        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->tag = $request->input('tag');

        if($article->save())
        {
            flash('Article updated', 'success');
            return redirect()->back();
        }
        else{
            return redirect('/');
        }

        
    }
}
