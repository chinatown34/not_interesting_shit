@extends('indexuse')
{!! Form::open(['route' => 'base64']) !!}
{!! Form::textarea('source', $source) !!}
{!! Form::hidden('method', 'encode') !!}
<br>
<button name="submit" value="submit">submit</button>
{!! Form::close() !!}
{!! Form::textarea('result', $res) !!}