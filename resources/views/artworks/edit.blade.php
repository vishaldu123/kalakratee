@extends('adminlte::page')

@section('title', 'Edit Artwork')

@section('content_header')
    <h1>Edit Artwork</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Artwork Details</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="POST" action="{{ route('artworks.update', $artwork->id) }}">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $artwork->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ $artwork->description }}</textarea>
                </div>
                <!-- Add more input fields for other artwork attributes -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Artwork</button>
            </div>
        </form>
    </div>
@stop

@section('css')
    <!-- Additional CSS styles if needed -->
@stop

@section('js')
    <!-- Additional JavaScript scripts if needed -->
@stop
