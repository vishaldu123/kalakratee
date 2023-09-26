@extends('adminlte::page')

@section('title', 'Edit Role')

@section('content_header')
    <h1>Edit Role: {{ $role->name }}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <form method="post" action="{{ route('admin.updateRole', $role->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $role->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Role</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
