@extends('adminlte::page')

@section('title', 'Create Tag')

@section('content_header')
    <h1>Create Tag</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enter Tag Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('tags.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter tag name">
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Tag</button>
            </div>
        </form>
    </div>
@stop
