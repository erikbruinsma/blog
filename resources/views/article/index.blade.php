Alle artikelen ({!! $articles->count() !!}):


@foreach ($articles as $article)
{!! $article->title !!} {!! $article->title_slug !!} {!! $article->content !!} {!! $article->created_at !!} <br />
@endforeach
