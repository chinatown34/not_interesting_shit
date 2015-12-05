@extends('index')
@section('head')
    @include('parts.head')
@stop
@section('main_content')
    @if ($pagetype == 'index')
        выведу индекс
    @else
        выведу базу
    @endif
@stop
@section('sidebar')
    @include('parts.sidebar')
@stop
@section('footer')
   @include('parts.footer')
@stop
