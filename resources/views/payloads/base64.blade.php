@extends('index')
@section('main_content')
<h1>{{$params->h1}}</h1>
{!! $params->h1_text !!}
<script>
    function input_output_switch() {
        var t = document.getElementById('input').value;
        if (t!="") {
            document.getElementById('input').value = document.getElementById('output').value;
            document.getElementById('output').value = t;
        }
    }

    function h_switch(){
        var value = document.getElementById("h_method").value;
        if (value=="to_base64")
        {
            document.getElementById("h_method").value="to_text";
            document.getElementById('from').innerHTML= "Base64";
            document.getElementById('to').innerHTML= "Text";
            input_output_switch();
        }
        else
        {
            document.getElementById("h_method").value="to_base64";
            document.getElementById('from').innerHTML= "Text";
            document.getElementById('to').innerHTML= "Base64";
            input_output_switch();
        }

    }
</script>
<p id="from">Text</p><button class="btn btn-default " type="submit" onclick="h_switch();"> </button><p id="to">Base64</p>

{!! Form::open(['route' => 'base64']) !!}

    <input id="h_method" type="hidden" name="method" value="to_base64">
    <textarea id="input" class="form-control" name="source" placeholder="{{trans('base64.input_holder')}}" rows="6">{{isset($source) ? $source: ''}}</textarea>

    <span>{{trans('base64.encoding')}}</span>
    <select name="encoding_type" class="form-control type">
        <option value="utf8" @if ( $encoding_type == 'utf8') selected @endif >UTF-8</option>
        <option value="windows-1251" @if ( $encoding_type == 'windows-1251') selected @endif >windows-1251</option>
        <option value="ascii" @if ( $encoding_type == 'ascii') selected @endif >ASCII</option>
    </select>

    <button class="btn btn-default clearfix" type="submit">{{trans('base64.button')}}</button>

{!! Form::close() !!}

<textarea id="output" class="form-control" rows="8" placeholder="{{trans('base64.output_holder')}}">{{isset($res) ? $res : ''}}</textarea>

<h2>{{$params->h2}}</h2>
<div class="seo">
    {!! $params->h2_text !!}
</div>
@stop