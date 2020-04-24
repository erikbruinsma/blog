Alle artikelen ({!! $articles->count() !!}):


@foreach ($articles as $article)
{!! $article->title !!} {!! $article->title_slug !!} {!! $article->content !!} {!! $article->created_at !!}

<form action="{{ route('article.destroy', $article->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>

<br />
@endforeach
