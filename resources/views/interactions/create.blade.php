@extends('adminlte::page')

@section('title', 'Create Interaction')

@section('content_header')
    <h1>Create Interaction</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enter Interaction Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('interactions.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type">
                        <option value="like">Like</option>
                        <option value="comment">Comment</option>
                        <option value="share">Share</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="user">User</label>
                    <select class="form-control select2" name="user" data-placeholder="Select user" style="width: 100%;">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="artwork">Artwork</label>
                    <select class="form-control select2" name="artwork" data-placeholder="Select artwork" style="width: 100%;">
                        <option value="">None</option>
                        @foreach($artworks as $artwork)
                            <option value="{{ $artwork->id }}">{{ $artwork->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Interaction</button>
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
