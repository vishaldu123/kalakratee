@extends('adminlte::page')

@section('title', 'Assign Roles to User')

@section('content_header')
    <h1>Assign Roles to User</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-body">
                    <form method="post" action="{{ route('admin.assignRoles') }}">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" class="form-control" required>
                                <option value="" disabled selected>Select User</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <select name="roles[]" class="form-control" multiple required>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Assign Roles</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
