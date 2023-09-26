@extends('adminlte::page')

@section('title', 'Interactions')

@section('content_header')
    <h1>Interactions</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Interactions List</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>User</th>
                        <th>Artwork</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($interactions as $interaction)
                        <tr>
                            <td>{{ $interaction->id }}</td>
                            <td>{{ $interaction->type }}</td>
                            <td>{{ $interaction->user->name }}</td>
                            <td>
                                @if($interaction->artwork)
                                    <a href="{{ route('artworks.show', $interaction->artwork->id) }}">{{ $interaction->artwork->title }}</a>
                                @else
                                    N/A
                                @endif
                            </td>
                            <td>{{ $interaction->created_at }}</td>
                            <td>
                                <a href="{{ route('interactions.show', $interaction->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('interactions.edit', $interaction->id) }}" class="btn btn-primary">Edit</a>
                                <!-- Add a delete button as needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
