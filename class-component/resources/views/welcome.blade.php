<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class and Component</title>
    <style>
        .myclass{
            color: brown;
        }
    </style>
</head>
<body>
    <h1>Home Page</h1>
    <hr>

    @php
        $desc = 'Card Description';
    @endphp


    <x-card title="Card title 1" sub-title='Card Subtitle 1' :description=$desc class="myclass" />

    <x-card title="Card title 2" sub-title='Card Subtitle 2' :description=$desc />

    <x-card title="Card title 3" sub-title='Card Subtitle 3' :description=$desc />

    <x-anonymous title="Card Title 1"/>
    <x-anonymous title="Card Title 2"/>
    <x-anonymous title="Card Title 3"/>

    <x-include.header/>
</body>
</html>

{{-- 
    Passing data to components:
    1. pass data to blade component using HTML attributes
    2. Hard - coded, primitive values may be passed to the component using simple HTML attributes strings
    3. php expressions and variables should by passed to the component via attributes that use the character as a prefix
    <x-card title="Vard Titile" :description=$desc />?
--}}