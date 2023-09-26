@extends('adminlte::page')

@section('title', 'Create Group')

@section('content_header')
    <h1>Create Group</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enter Group Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('groups.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter group name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter group description"></textarea>
                </div>
                <div class="form-group">
                    <label for="members">Members</label>
                    <select class="form-control select2" multiple="multiple" name="members[]" data-placeholder="Select members" style="width: 100%;">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Group</button>
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
