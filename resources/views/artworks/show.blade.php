@extends('adminlte::page')

@section('title', 'Artwork Details')

@section('content_header')
    <h1>Artwork Details</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $artwork->title }}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
                <label for="description">Description</label>
                <p>{{ $artwork->description }}</p>
            </div>
            <!-- Display other artwork attributes here -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-primary">Edit Artwork</a>
        </div>
    </div>
@stop

@section('css')
    <!-- Additional CSS styles if needed -->
@stop

@section('js')
    <!-- Additional JavaScript scripts if needed -->
@stop
