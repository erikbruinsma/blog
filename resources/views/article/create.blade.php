@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif



    <form method="post" action="{{ route('article.store') }}" />
 @csrf
<input type="text" name="title" value="{!! Request::old('title', '') !!}" /><br />
<textarea name="content" rows="3">{!! Request::old('content', '') !!}</textarea><br />
<input type="text" name="published_at" value="{!! Request::old('published_at', '') !!}" /><br />
<input type="submit" value="opslaan" />
</form>
