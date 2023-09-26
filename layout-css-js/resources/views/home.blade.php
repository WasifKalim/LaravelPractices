@extends('layout.adminlayout') {{-- it works as include the file here--}}
@section('title','Home ') {{--  section is used to pass the value in extends --}}


@section('page-name')
    <h1>Home Page</h1>
    <hr>
@endsection

@section('banner')
    <h2>This is Home page banner</h2>
@endsection

@section('main')
    <h2>This is Contact Page Main Content</h2>
@endsection

@yield('default') {{-- no need in @show --}}

{{-- agar  default nhi dekhna hn to overide it --}}
{{-- @section()
    <h3>This is default overide</h3>
@endsection --}}

{{-- agar default k sath dekhna hn to append krna hoga --}}
@section()
    @parent
    <h3>This is default overide</h3>
@endsection


