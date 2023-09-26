@extends('adminlte::page')

@section('title', 'Interaction Details')

@section('content_header')
    <h1>Interaction Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $interaction->type }}</h3>
        </div>
        <div class="box-body">
            <ul>
                <li><strong>Type:</strong> {{ $interaction->type }}</li>
                <li><strong>User:</strong> {{ $interaction->user->name }}</li>
                <li><strong>Artwork:</strong>
                    @if($interaction->artwork)
                        <a href="{{ route('artworks.show', $interaction->artwork->id) }}">{{ $interaction->artwork->title }}</a>
                    @else
                        N/A
                    @endif
                </li>
                <li><strong>Creation Date:</strong> {{ $interaction->created_at }}</li>
            </ul>
        </div>
        <div class="box-footer">
            <a href="{{ route('interactions.edit', $interaction->id) }}" class="btn btn-primary">Edit Interaction</a>
        </div>
    </div>
@stop
