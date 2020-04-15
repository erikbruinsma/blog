<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function index()
  {
      return view('home');


  }

  public function toFacebookPoster($article)
  {
      return with(new FacebookPosterPost($article->title))
          ->withLink($article->getLink());
  }
  
}
