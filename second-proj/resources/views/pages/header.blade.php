<h1>Header Page</h1>

{{-- @foreach ($names as $key => $value )
   <p>{{ $key }} - {{ $value }} </p> 
@endforeach --}}


@forelse ($name as $key => $value)
<p>{{ $key }} - {{ $value }} </p>
@empty
    {{-- for no value --}}
    <p>No Value Found</p>
@endforelse