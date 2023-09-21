<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
    <h1>Contact page</h1>
    <hr>
    {{-- <h3>Name: {{ $nm }}</h3> --}}

    {{-- <h3>Time {{ time() }}</h3> --}}

    {{-- <h2>SQRT: {{ sqrt(49) }} </h2> --}}

    {{-- @if ($nm== 'Wasif')
        <h1>Hello {{$nm}} </h1>
    @endif --}}

    {{-- @if ($nm== 'Wasif')
        <h1>Hello {{$nm}}  </h1>
    @elseif ($nm== 'Khan')
        <h1> {{$nm}} not available </h1>
    @else
        <h1>No One</h1>
    @endif --}}

     {{-- @unless ($nm=='Wasif')
         <h1>You are not admin</h1>
     @endunless --}}

     {{-- @isset($nm)
         <h1>{{$nm}}</h1>
     @endisset --}}

    {{-- @empty($nm)
        <h1>Hello {{$nm}} </h1>
    @endempty --}}

    {{-- Only execute in production --}}
    {{-- @production
        <h1>Production Code</h1> 
    @endproduction --}}

    {{-- Only execute in local --}}
    {{-- @env('local')
        <h1>Local Environment</h1>
    @endenv --}}

    {{-- Only execute in local or staging --}}
    {{-- @env(['local','staging' ])
        <h1>Local Environment</h1>
    @endenv --}}
        
    {{-- @switch('Admin')
        @case('Admin')
            <h1>First</h1>
            @break
        @case('Guest')
            <h1>Second</h1>
            @break
    
        @default
            <h1>Not valid value</h1> 
    @endswitch --}}


    {{-- @for ($i = 0; $i < 10; $i++)
        <h1>Wasif {{$i}} </h1>
    @endfor --}}

        {{-- foreach --}}
    {{-- @foreach ($students as $stu)
        <h1> {{$stu}} </h1>
    @endforeach --}}

    {{-- @forelse ($students as $stu)
        <h1> {{$stu}} </h1>
    @empty
    {{-- if array is empty
        <h1>No students</h1>
    @endforelse --}}

    {{-- Reads till value is there  --}}
    {{-- @while (true)
        <h1>Hello Forever</h1>
    @endwhile --}}

    {{-- @foreach ($students as $stu)
        @if ($stu == 'Raj')
            @break
        @endif
        <h1> {{stu}} </h1>
    @endforeach --}}

    {{-- @foreach ($students as $stu)
        @if ($stu == 'Raj')
            @continue
        @endif
        <h1> {{stu}} </h1>
    @endforeach --}}

        {{-- short break --}}
    {{-- @foreach ($students as $stu)
        @break($stu=='Raj')
        <h1> {{$stu}} </h1>
    @endforeach --}}

        {{-- short continue --}}
    {{-- @foreach ($students as $stu)
        @continue($stu=='Raj')
        <h1> {{$stu}} </h1>
    @endforeach --}}


    @foreach ($students as $stu)
        <h1> {{$stu}} </h1>
        @if ($loop->first)
            {{-- This is the first iteration --}}
            <h1>It  is the first loop</h1>
        @endif
    @endforeach



</body>
</html>