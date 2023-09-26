@extends('adminlte::page')

@section('title', 'Confirm Delete Role')

@section('content_header')
    <h1>Confirm Delete Role</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-body">
                    <p>Are you sure you want to delete this role?</p>
                    <p><strong>Role Name:</strong> {{ $role->name }}</p>
                    <form method="post" action="{{ route('admin.destroyRole', $role->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Role</button>
                        <a href="{{ route('admin.roles') }}" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
