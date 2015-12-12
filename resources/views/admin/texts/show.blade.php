@extends('layouts.master')

@section('content')

    <h1>Text</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Pagename</th><th>Slug</th><th>Lang</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $text->id }}</td> <td> {{ $text->pagename }} </td><td> {{ $text->slug }} </td><td> {{ $text->lang }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection