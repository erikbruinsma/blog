<form method="post" action="{{ route('article.store') }}" />
 @csrf
<input type="text" name="title" value="{!! Request::old('title', '') !!}" />
<textarea name="content" rows="3">{!! Request::old('content', '') !!}</textarea>
<input type="text" name="published_at" value="{!! Request::old('published_at', '') !!}" />
<input type="submit" value="opslaan" />
</form>
