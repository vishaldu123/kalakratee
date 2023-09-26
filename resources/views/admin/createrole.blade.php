@extends('adminlte::page')

@section('title', 'Create Role')

@section('content_header')
    <h1>Create Role</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Role Information</h3>
                </div>
                <form method="post" action="{{ route('admin.storeRole') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">Role Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter role name" required>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create Role</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
