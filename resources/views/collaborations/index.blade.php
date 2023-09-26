@extends('adminlte::page')

@section('title', 'Collaborations')

@section('content_header')
    <h1>Collaborations</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Collaborations List</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Participants</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($collaborations as $collaboration)
                        <tr>
                            <td>{{ $collaboration->id }}</td>
                            <td>{{ $collaboration->project_name }}</td>
                            <td>
                                @foreach($collaboration->users as $user)
                                    {{ $user->name }},
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('collaborations.show', $collaboration->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('collaborations.edit', $collaboration->id) }}" class="btn btn-primary">Edit</a>
                                <!-- Add a delete button as needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
