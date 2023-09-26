@extends('adminlte::page')

@section('title', 'Create Collaboration')

@section('content_header')
    <h1>Create Collaboration</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enter Collaboration Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('collaborations.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="project_name">Project Name</label>
                    <input type="text" class="form-control" id="project_name" name="project_name" placeholder="Enter project name">
                </div>
                <div class="form-group">
                    <label for="participants">Participants</label>
                    <select class="form-control select2" multiple="multiple" name="participants[]" data-placeholder="Select participants" style="width: 100%;">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Collaboration</button>
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
