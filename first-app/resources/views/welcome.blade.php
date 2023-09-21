<h1>Our First Project</h1>

<a href="port">post page link</a>
<a href="firstpost">firstpost link</a>

{{ 5+2}}

{{ "Hello World" }}

<br><br>

{{ "<h1>hello world</h1>" }}

{!! "<h1>Yahoo Baba</h1>" !!}

{{-- {{ "<script>alert('Yahoo Baba')</script>" }} --}}

{{-- COmment Statement --}}

@php
    $names = ["Salman Khan", "John Abraham", "Shahid Kapoor"];
    $user = "YahooBaba";
@endphp

<ul>
@foreach ($names as $name )
    @if ($loop->first)
        <li style="color: red">{{ $name }}</li>
    @elseif($loop->first)
        <li style="color: green">{{ $name}}</li>
    @else
        <li>{{ $name }}</li>
    @endif
@endforeach
</ul>

@{{ $user }}

@@if()
