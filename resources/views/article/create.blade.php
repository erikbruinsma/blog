{!! Form::open(['action' => 'Controller@method']) !!}

@method('PUT')

{!! Form::token() !!}
{!! Form::text('title') !!}
{!! Form::text('content') !!}
{!! Form::text('published_at') !!}

{!! Form::close() !!}
