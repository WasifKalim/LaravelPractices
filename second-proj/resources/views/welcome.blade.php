@php
    $fruits = ["one"=>"Apple", "two"=>"Banana", "three"=>"Orange"];
    $value = "hello";
@endphp

{{-- @include('pages.header', ['names' => $fruits]); --}}
{{-- @includeWhen(empty($value),'pages.header', ['names' => $fruits]); --}}
@includeUnless(empty($value),'pages.header', ['names' => $fruits]);

<h2>Welcome</h2>

@include('pages.footer');