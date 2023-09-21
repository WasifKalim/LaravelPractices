<div>
    <h2>{{$title}}</h2>
    <h3>{{$subTitle}}</h3>
    <p>{{$description}}</p>
</div>

<div>
    {{$addNumber(10)}}
</div>
<h1 {{ $attributes }} >Hello</h1>
{{-- <h1 {{$attributes->merge(['class'=>'dclass'])}} >Hello</h1> --}}
<hr>