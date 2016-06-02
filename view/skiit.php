@layout('layouts.head', ['__title' => 'skiit'])



@foreach($skiit as $key => $item)

<div class="ball">
    <h1>{{ $item->name }}</h1>
    <p>mail: {{ $item->mail }}</p>
</div>


@endforeach


@layout('layouts.foot')