@extends('index')
@section('main_content')
    <h1>{{$params->h1}}</h1>
    {!! $params->h1_text !!}
    <br>
    <p id="from">Text</p><p id="to">to Sgiha1</p>
    {!! Form::open(['route' => 'sha1']) !!}
    <input id="h_method" type="hidden" name="method" value="to_sha1">
    <textarea id="input" class="form-control" name="source" placeholder="{{trans('sha1.input_holder')}}" rows="6">{{isset($source) ? $source: ''}}</textarea>
    <button class="btn btn-default clearfix" type="submit">{{trans('sha1.button')}}</button>

    {!! Form::close() !!}
    <input type="text" id="output" class="form-control" placeholder="{{trans('sha1.output_holder')}}" value="{{isset($res) ? $res : ''}}">


    <h2>{{$params->h2}}</h2>
    <div class="seo">
        {!! $params->h2_text !!}
    </div>
@stop