@extends('index')
@section('main_content')
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
            if (value=="to_puny")
            {
                document.getElementById("h_method").value="to_text";
                document.getElementById('from').innerHTML= "Punycode";
                document.getElementById('to').innerHTML= "Text";
                input_output_switch();
            }
            if (value=="to_text")
            {
                document.getElementById("h_method").value="to_puny";
                document.getElementById('from').innerHTML= "Text";
                document.getElementById('to').innerHTML= "Punycode";
                input_output_switch();
            }

        }
    </script>
    @if($method=='to_puny')
        <p id="from">Text</p><button class="btn btn-default " type="submit" onclick="h_switch();"> </button><p id="to">Punycode</p>
    @else
        <p id="from">Punycode</p><button class="btn btn-default " type="submit" onclick="h_switch();"> </button><p id="to">Text</p>
    @endif

    {!! Form::open(['route' => 'punycode']) !!}

    <input id="h_method" type="hidden" name="method" value="{{$method}}">
    <textarea id="input" class="form-control" name="source" placeholder="{{trans('punicode.input_holder')}}" rows="6">{{isset($source) ? $source: ''}}</textarea>

    <button class="btn btn-default clearfix" type="submit">{{trans('punicode.button')}}</button>

    {!! Form::close() !!}

    <textarea id="output" class="form-control" rows="8" placeholder="{{trans('punicode.output_holder')}}">{{isset($res) ? $res : ''}}</textarea>
    <h1>{{$params->h1}}</h1>
    {!! $params->h1_text !!}
    <h2>{{$params->h2}}</h2>
    <div class="seo">
        {!! $params->h2_text !!}
    </div>
@stop