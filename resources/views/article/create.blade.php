<form method="post" action="{{ route('article.store') }}" />
 @csrf
<input type="text" name="title" value="{!! Input::old('title', '') !!}" />
<textarea name="content" rows="3">{!! Input::old('content', '') !!}</textarea>
<input type="text" name="published_at" value="{!! Input::old('published_at', '') !!}" />
<input type="submit" value="opslaan" />
</form>
