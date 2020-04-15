<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  public function toFacebookPoster($article)
  {
      return with(new FacebookPosterPost($article->title))
          ->withLink($article->getLink());
  }
  
  public function index()
  {
      toFacebookPoster(['title' => 'test titel', 'url' => 'https://www.google.nl', 'link' => 'https://www.google.nl']);
      return view('home');


  }



}
