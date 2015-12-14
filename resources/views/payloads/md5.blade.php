@extends('index')
@section('main_content')
    <h1>{{$params->h1}}</h1>
    {!! $params->h1_text !!}
    <br>
    <p id="from">Text</p><p id="to">to Md5</p>
    {!! Form::open(['route' => 'md5']) !!}
    <input id="h_method" type="hidden" name="method" value="to_md5">
    <textarea id="input" class="form-control" name="source" placeholder="{{trans('md5.input_holder')}}" rows="6">{{isset($source) ? $source: ''}}</textarea>
    <button class="btn btn-default clearfix" type="submit">{{trans('md5.button')}}</button>

    {!! Form::close() !!}

    <textarea id="output" class="form-control" rows="8" placeholder="{{trans('md5.output_holder')}}">{{isset($res) ? $res : ''}}</textarea>

    <h2>{{$params->h2}}</h2>
    <div class="seo">
        {!! $params->h2_text !!}
    </div>
@stop