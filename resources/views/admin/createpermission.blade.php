@extends('adminlte::page')

@section('title', 'Create Permission')

@section('content_header')
    <h1>Create Permission</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <form method="post" action="{{ route('admin.storePermission') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Permission Name</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Permission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
