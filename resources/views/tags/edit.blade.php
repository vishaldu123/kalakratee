@extends('adminlte::page')

@section('title', 'Edit Tag')

@section('content_header')
    <h1>Edit Tag</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Tag Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('tags.update', $tag->id) }}">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $tag->name }}">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Tag</button>
            </div>
        </form>
    </div>
@stop
