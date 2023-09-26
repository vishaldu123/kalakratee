@extends('adminlte::page')

@section('title', 'Manage Roles')

@section('content_header')
    <h1>Manage Roles</h1>
@stop

@section('content')
    <a href="{{ route('admin.create.role') }}" class="btn btn-primary">Create Role</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->name }}</td>
                    <td>{{ implode(', ', $role->permissions->pluck('name')->toArray()) }}</td>
                    <td>
                        <a href="{{ route('admin.edit.role', $role->id) }}" class="btn btn-warning">Edit</a>
                        <a href="{{ route('admin.delete.role', $role->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Pagination links if necessary -->
@stop
