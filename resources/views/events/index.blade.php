@extends('adminlte::page')

@section('title', 'Events')

@section('content_header')
    <h1>Events</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Events List</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Organizer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{ $event->id }}</td>
                            <td>{{ $event->name }}</td>
                            <td>{{ $event->description }}</td>
                            <td>{{ $event->date }}</td>
                            <td>{{ $event->location }}</td>
                            <td>{{ $event->organizer->name }}</td>
                            <td>
                                <a href="{{ route('events.show', $event->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit</a>
                                <!-- Add a delete button as needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
