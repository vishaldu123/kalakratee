@extends('adminlte::page')

@section('title', 'Groups')

@section('content_header')
    <h1>Groups</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Groups List</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Members</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($groups as $group)
                        <tr>
                            <td>{{ $group->id }}</td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->description }}</td>
                            <td>
                                @foreach($group->users as $user)
                                    {{ $user->name }},
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('groups.show', $group->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('groups.edit', $group->id) }}" class="btn btn-primary">Edit</a>
                                <!-- Add a delete button as needed -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
