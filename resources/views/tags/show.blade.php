@extends('adminlte::page')

@section('title', 'Tag Details')

@section('content_header')
    <h1>Tag Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $tag->name }}</h3>
        </div>
        <div class="box-body">
            <ul>
                <li><strong>Name:</strong> {{ $tag->name }}</li>
            </ul>
        </div>
        <div class="box-footer">
            <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary">Edit Tag</a>
        </div>
    </div>
@stop
