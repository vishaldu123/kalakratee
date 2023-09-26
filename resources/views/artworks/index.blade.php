@extends('adminlte::page')

@section('title', 'Artworks')

@section('content_header')
    <h1>Artworks</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Artworks List</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <!-- Add more table headers for artwork attributes -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($artworks as $artwork)
                        <tr>
                            <td>{{ $artwork->id }}</td>
                            <td>{{ $artwork->title }}</td>
                            <td>{{ $artwork->description }}</td>
                            <!-- Add more table columns for artwork attributes -->
                            <td>
                                <a href="{{ route('artworks.show', $artwork->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-primary">Edit</a>
                                <!-- Add a delete button as needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <!-- Additional CSS styles if needed -->
@stop

@section('js')
    <!-- Additional JavaScript scripts if needed -->
@stop
