@extends('layouts.master')

@section('content')

    <h1>Edit Text</h1>
    <hr/>

    {!! Form::model($text, [
        'method' => 'PATCH',
        'route' => ['texts.update', $text->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('pagename') ? 'has-error' : ''}}">
                {!! Form::label('pagename', 'Pagename: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pagename', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('pagename', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('slug') ? 'has-error' : ''}}">
                {!! Form::label('slug', 'Slug: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lang') ? 'has-error' : ''}}">
                {!! Form::label('lang', 'Lang: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lang', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lang', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
                {!! Form::label('title', 'Title: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descr') ? 'has-error' : ''}}">
                {!! Form::label('descr', 'Descr: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descr', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descr', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('h1') ? 'has-error' : ''}}">
                {!! Form::label('h1', 'H1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('h1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('h1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('h1_text') ? 'has-error' : ''}}">
                {!! Form::label('h1_text', 'H1 Text: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('h1_text', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('h1_text', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('h2') ? 'has-error' : ''}}">
                {!! Form::label('h2', 'H2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('h2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('h2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('h2_text') ? 'has-error' : ''}}">
                {!! Form::label('h2_text', 'H2 Text: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('h2_text', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('h2_text', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection