@extends('adminlte::page')

@section('title', 'Edit Group')

@section('content_header')
    <h1>Edit Group</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Group Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('groups.update', $group->id) }}">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $group->name }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ $group->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="creation_date">Creation Date</label>
                    <input type="date" class="form-control" id="creation_date" name="creation_date" value="{{ $group->creation_date }}">
                </div>
                <div class="form-group">
                    <label for="members">Members</label>
                    <select class="form-control select2" multiple="multiple" name="members[]" data-placeholder="Select members" style="width: 100%;">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ in_array($user->id, $selectedMembers) ? 'selected' : '' }}>{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Group</button>
            </div>
        </form>
    </div>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@stop
