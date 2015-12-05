@extends('index')
@section('main_content')
<h1> Base 64</h1>
<p id="from">Text</p><button class="btn btn-default " type="submit"> </button><p id="to">Base64</p>

<form>

    <textarea class="form-control" placeholder="{{trans('base64.input_holder')}}" rows="6"></textarea>

    <span>{{trans('base64.encode')}}</span>

    <select class="form-control type">
        <option>UTF-8</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>

    <button class="btn btn-default clearfix" type="submit">{{trans('base64.button')}}</button>

</form>

<textarea class="form-control" rows="8" placeholder="{{trans('base64.output_holder')}}"></textarea>

<h2>Seo text H2</h2>
<p class="seo">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nunc in ex suscipit cursus sit amet dapibus nunc. Quisque porttitor justo quis euismod dictum. Fusce in rhoncus ligula. Fusce scelerisque dolor sit amet dui porta hendrerit. Integer faucibus, neque sit amet tempor posuere, tortor ligula consequat metus, nec tempor ante ex egestas justo. Maecenas efficitur eleifend mi et lacinia. Suspendisse a nunc dui. Maecenas non nibh ut ante accumsan mattis ac eu nisi. Quisque quis felis sed tellus posuere porta a vel turpis. Mauris ut aliquam ligula, in fermentum justo. Phasellus faucibus dictum ante, id pharetra nisl tincidunt sed. Quisque sollicitudin rhoncus cursus.
</p>
@stop