@extends('adminlte::page')

@section('title', 'Event Details')

@section('content_header')
    <h1>Event Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $event->name }}</h3>
        </div>
        <div class="box-body">
            <ul>
                <li><strong>Name:</strong> {{ $event->name }}</li>
                <li><strong>Description:</strong> {{ $event->description }}</li>
                <li><strong>Date:</strong> {{ $event->date }}</li>
                <li><strong>Location:</strong> {{ $event->location }}</li>
                <li><strong>Organizer:</strong> {{ $event->organizer->name }}</li>
                <li><strong>Creation Date:</strong> {{ $event->created_at }}</li>
            </ul>
        </div>
        <div class="box-footer">
            <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit Event</a>
        </div>
    </div>
@stop
