@layout('layouts.head')

{! Form::open('/create') !}
    <input type="submit" name="submit" value="Create">
{! Form::close() !}

{! Form::open('/delete') !}
    <input type="submit" name="submit" value="Delete">
{! Form::close() !}


@foreach($images as $key => $value)

    <pre>{{ $value }}</pre>

@endforeach

@if(isset($images))

    <h1>yo</h1>

@endif


@layout('layouts.foot')
