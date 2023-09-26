@extends('adminlte::page')

@section('title', 'Create Category')

@section('content_header')
    <h1>Create Category</h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Enter Category Details</h3>
        </div>
        <form role="form" method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" placeholder="Category Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="parent_category">Parent Category</label>
                    <select class="form-control" id="parent_category" name="parent_category">
                        <option value="">No Parent Category</option>
                        @foreach($parentCategories as $parentCategory)
                            <option value="{{ $parentCategory->id }}">{{ $parentCategory->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create Category</button>
            </div>
        </form>
    </div>
@stop
