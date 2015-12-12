@extends('layouts.master')

@section('content')

    <h1>Texts <a href="{{ route('texts.create') }}" class="btn btn-primary pull-right btn-sm">Add New Texts</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Pagename</th><th>Slug</th><th>Lang</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($texts as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('/texts', $item->id) }}">{{ $item->pagename }}</a></td><td>{{ $item->slug }}</td><td>{{ $item->lang }}</td>
                    <td>
                        <a href="{{ route('texts.edit', $item->id) }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'route' => ['texts.destroy', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $texts->render() !!} </div>
    </div>

@endsection
