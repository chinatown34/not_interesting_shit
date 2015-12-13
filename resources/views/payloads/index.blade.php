@extends('index')
@section('main_content')
    <div class="seo">
    <h1>{{$params->h1}}</h1>
    {!! $params->h1_text !!}
    <h2>{{$params->h2}}</h2>
        {!! $params->h2_text !!}
    </div>
@stop