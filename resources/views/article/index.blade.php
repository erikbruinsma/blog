<h1>Alle artikelen ({!! $articles->count() !!})</h1>

@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
  @endif

  <a href="{!! route('article.create') !!}" />aanmaken</a>


@foreach ($articles as $article)
{!! $article->title !!} {!! $article->title_slug !!} {!! $article->content !!} {!! $article->created_at !!}

<form action="{{ route('article.destroy', $article->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>

<br />
@endforeach
