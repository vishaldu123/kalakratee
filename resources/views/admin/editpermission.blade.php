@extends('adminlte::page')

@section('title', 'Edit Permission')

@section('content_header')
    <h1>Edit Permission</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <form method="post" action="{{ route('admin.updatePermission', $permission->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Permission Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="{{ $permission->name }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Permission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
