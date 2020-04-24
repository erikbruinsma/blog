@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form method="post" action="{{ route('article.update', [$article->id]) }}" />
 @csrf
 @method('PUT')
<input type="text" name="title" value="{!! Request::old('title', $article->title) !!}" />
<textarea name="content" rows="3">{!! Request::old('content', $article->content) !!}</textarea>
<input type="text" name="published_at" value="{!! Request::old('published_at', $article->published_at) !!}" />
<input type="submit" value="bewerken" />
</form>
