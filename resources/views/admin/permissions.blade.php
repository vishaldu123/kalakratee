@extends('adminlte::page')

@section('title', 'Manage Permissions')

@section('content_header')
    <h1>Manage Permissions</h1>
@stop

@section('content')
    <a href="{{ route('admin.create.permission') }}" class="btn btn-primary">Create Permission</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <a href="{{ route('admin.edit.permission', $permission->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.delete.permission', $permission->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination links if necessary -->
@stop
