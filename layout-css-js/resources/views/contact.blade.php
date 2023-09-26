@extends('layout.adminlayout') {{-- it works as include the file here--}}
@section('title', 'Contact') {{--  section is used to pass the value in extends --}}

@section('page-name')
    <h1>Contact Page</h1>
    <hr>
@endsection

@section('banner')
    <h2>This is Contact Page Bannner</h2>
@endsection

@section('main')
    <h2>This is Contact Page Main Content</h2>
@endsection
