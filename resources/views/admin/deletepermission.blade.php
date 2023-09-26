@extends('adminlte::page')

@section('title', 'Confirm Delete Permission')

@section('content_header')
    <h1>Confirm Delete Permission</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-body">
                    <p>Are you sure you want to delete this permission?</p>
                    <p><strong>Permission Name:</strong> {{ $permission->name }}</p>
                    <form method="post" action="{{ route('admin.destroyPermission', $permission->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Permission</button>
                        <a href="{{ route('admin.permissions') }}" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
