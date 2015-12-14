@extends('index')
@section('head')
    @include('parts.head')
@stop
@section('main_content')
    @if ($params->pagename == 'index')
        @include('payloads.index')
    @elseif ($params->pagename == 'base64')
        @include('payloads.base64')
    @else
        @include("payloads.$params->pagename")
    @endif
@stop
@section('sidebar')
    @include('parts.sidebar')
@stop
@section('footer')
   @include('parts.footer')
@stop
