@extends('layouts.app')
@section('content')

<div>
<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
@foreach ($phone as $item)
@if($item['Price']<=3000)
    <p> {{ $item['Type']}} - {{ $item['Price']}} - {{ $item['Color']}}</p>   
@else
<p style="color:red">{{ $item['Type']}} - {{ $item['Price']}} - {{ $item['Color']}}</p>
@endif

@endforeach

@endsection
</div>
