<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ArticleController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      return view('article.index', ['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'title'=>'required',
          'content'=>'required'
      ]);

      $article = new Article([
          'title' => $request->get('title'),
          'title_slug' => Str::slug($request->get('title'), '-'),
          'content' => $request->get('content')
        ]);
      $article->save();
      return redirect('/article')->with('success', 'Contact saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => Article::findOrFail($article)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
      $articles = Article::find($article)->first();
      return view('article.edit', ['article' => $articles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
      $request->validate([
          'title'=>'required',
          'content'=>'required'
      ]);

        $article = Article::find($article)->first();
        $article->title = $request->get('title');
        $article->title_slug = Str::slug($request->get('title'), '-');
        $article->content = $request->get('content');
        $article->save();

        return redirect('/article')->with('success', 'Article updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
      $article = Article::find($article)->first();
      $article->delete();

      return redirect('/article')->with('success', 'Article deleted!');
    }
}
